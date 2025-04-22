<template>
    <div class="h-full w-full">
      <div id="gjs" class="h-full w-full" />
    </div>
  </template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import grapesjs from 'grapesjs'
import 'grapesjs/dist/css/grapes.min.css'
import webpagePreset from 'grapesjs-preset-webpage'
import basicBlocks from 'grapesjs-blocks-basic'
import formsPlugin from 'grapesjs-plugin-forms'

let editor = null

const props = defineProps({
  contentHtml: String,
})

document.addEventListener('keydown', function(e) {
  if ((e.ctrlKey || e.metaKey) && e.key === 'm') {
    e.preventDefault() // This prevents the default browser Save dialog
    e.stopPropagation()
    const html = editor.getHtml()
    const css = editor.getCss()

    // Combining HTML and CSS into one full HTML document
    const fullHtml = `
      <html>
        <head><style>${css}</style></head>
        <body>${html}</body>
      </html>
    `

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    fetch('/admin/save-html-to-public', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': token,
      },
      body: JSON.stringify({
        html: fullHtml,
      }),
    })
      .then(res => {
        console.log(res)
        if (!res.ok) {
          throw new Error(`HTTP error! Status: ${res.status}`)
        }
        return res.json()
      })
      .then(data => {
        if (data.url) {
          alert('✅ Saved! URL: ' + data
            .url) // Show success message with the URL of the saved HTML file
        } else {
          alert('❌ Failed to save')
        }
      })
      .catch(err => {
        console.log(err)
        console.error('Save error:', err)
        alert('❌ Save error')
      })
  }
})

onMounted(() => {
  editor = grapesjs.init({
    container: '#gjs',
    plugins: [webpagePreset,basicBlocks,formsPlugin],
    pluginsOpts: {
      [webpagePreset]: {},
      [basicBlocks]: {},
      [formsPlugin]: {},
    },
    storageManager: {
      type: 'local',
      autosave: true,
      autoload: true,
      stepsBeforeSave: 1,
    },
  }).setComponents(props.contentHtml || '<div class="default">Start Editing</div>')

  editor.DomComponents.addType('Section', {
    model: {
      defaults: {
        tagName: 'div',
        attributes: { class: 'am-sect' },
        components: `
        <div>
        </div>
      `,
        styles: `
        .am-sect{
          padding-right: 200px;
          padding-left: 200px;
          padding-top: 100px;
          padding-bottom: 100px;
          font-family: Helvetica, serif;
        }
      `,
        droppable: true,
        draggable: true,
      },
    },
  })

  editor.BlockManager.add('Section', {
    label: `
    <div style="display: flex; align-items: center; gap: 5px;">
      <img src="https://img.icons8.com/fluency/48/000000/code.png" width="20" height="20"/>
      <span>Section</span>
    </div>
  `,
    category: 'Custom',
    content: { type: 'Section' },
  })

  editor.DomComponents.addType('Section-Color', {
    model: {
      defaults: {
        tagName: 'div',
        attributes: { class: 'am-sect-color' },
        components: `
        <div>
        </div>
      `,
        styles: `
        .am-sect-color{
          padding-right: 200px;
          padding-left: 200px;
          padding-top: 100px;
          border-top-left-radius: 160px;
          border-bottom-right-radius: 160px;
          padding-bottom: 100px;
          font-family: Helvetica, serif;
          background: #8EBC38;
        }
      `,
        droppable: true,
        draggable: true,
      },
    },
  })

  editor.BlockManager.add('Section-Color', {
    label: `
    <div style="display: flex; align-items: center; gap: 5px;">
      <img src="https://img.icons8.com/fluency/48/000000/code.png" width="20" height="20"/>
      <span>Section Color</span>
    </div>
  `,
    category: 'Custom',
    content: { type: 'Section-Color' },
  })

  editor.DomComponents.addType('Container', {
    model: {
      defaults: {
        tagName: 'div',
        attributes: { class: 'am-container' },
        components: `
        <div>
            <h2>Custom Component</h2>
            <p>This is a component with custom HTML and CSS.</p>
        </div>
      `,
        styles: `
        .am-container{
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-around;
        }
      `,
        droppable: true,
        draggable: true,
      },
    },
  })

  editor.BlockManager.add('Container', {
    label: `
    <div style="display: flex; align-items: center; gap: 5px;">
      <img src="https://img.icons8.com/fluency/48/000000/code.png" width="20" height="20"/>
      <span>Container</span>
    </div>
  `,
    category: 'Custom',
    content: { type: 'Container' },
  })

  // 1. Add custom block to BlockManager
  editor.BlockManager.add('image-upload-block', {
    label: 'Image Upload',
    category: 'Media',
    content: { type: 'image-upload-block' },
  })

  editor.DomComponents.addType('image-upload-block', {
    model: {
      defaults: {
        tagName: 'div',
        droppable: false,
        copyable: false,
        highlightable: false,
        selectable: false,
        stylable: false,
        attributes: { style: 'display: none;' }, // invisible
      },
    },
    view: {
      onRender() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        // Trigger file picker immediately when block is added
        const input = document.createElement('input')
        input.type = 'file'
        input.accept = 'image/*'

        input.onchange = () => {
          const file = input.files[0]
          if (!file) return

          const formData = new FormData()
          formData.append('file', file)

          // Change to your upload endpoint!

          fetch('/admin/upload', {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': token,
            },
            body: formData,
          })
            .then(res => res.json())
            .then(data => {
              const imageUrl = data.uploadedUrl
              if (imageUrl) {
                // Insert <img> into canvas
                this.em.get('Editor').DomComponents.getWrapper().append({
                  type: 'image',
                  attributes: { src: imageUrl },
                })

                // Remove this temporary upload block
                this.model.remove()
              }
            })
            .catch(err => {
              alert('Upload failed')
              console.error(err)
              this.model.remove() // Cleanup even on error
            })
        }

        input.click() // 🔥 Trigger file dialog instantly
      },
    },
  })

  editor.Panels.removeButton('options', 'preview')

  editor.Commands.add('preview-in-layout', {
    run(editor) {
      const html = editor.getHtml()
      const css = editor.getCss()

      const form = document.createElement('form')
      form.method = 'POST'
      form.action = '/admin/grapes-preview'
      form.target = '_blank'

      // CSRF Token
      const token = document.createElement('input')
      token.type = 'hidden'
      token.name = '_token'
      token.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      form.appendChild(token)

      // HTML
      const htmlInput = document.createElement('input')
      htmlInput.type = 'hidden'
      htmlInput.name = 'html'
      htmlInput.value = html
      form.appendChild(htmlInput)

      // CSS
      const cssInput = document.createElement('input')
      cssInput.type = 'hidden'
      cssInput.name = 'css'
      cssInput.value = css
      form.appendChild(cssInput)

      document.body.appendChild(form)
      form.submit()
      document.body.removeChild(form)
    },
  })


  editor.Panels.addButton('options', {
    id: 'preview-in-layout-btn',
    className: 'fa fa-eye',
    command: 'preview-in-layout',
    attributes: { title: 'Preview with Laravel Layout' },
  })
})

onUnmounted(() => {
  if (editor) {
    editor.destroy()
    editor = null
  }
})
</script>

  <style>
  html,
  body {
    margin: 0;
    padding: 0;
    height: 100%;
  }
  #gjs {
    height: 100%;
    margin: 0;
    min-height: 100vh;
  }

  </style>
