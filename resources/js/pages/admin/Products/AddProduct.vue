<script setup lang="ts">
import { ref } from 'vue'
import { Head, useForm, usePage } from '@inertiajs/vue3'
import { Input } from '@/components/custom/ui/input'
import { Label } from '@/components/custom/ui/label'
import { TextArea } from '@/components/custom/ui/textarea'
import { Button } from '@/components/custom/ui/button'
import AppImageUpload from '@/components/custom/AppImageUpload.vue'

const page = usePage()

const form = useForm({
  name: '',
  description: '',
})

const submit = () => {
  // eslint-disable-next-line no-undef
  form.post(route('admin.category.store'), {
  })
}

const uploadedUrl = ref(page.props.uploadedUrl as string || null)

const imageUrl = ref('')

function handleFileUrl(url) {
  imageUrl.value = url
}

</script>

<template>

    <Head title="New Product" />

    <div class="container mb-[60px] mt-[57px]">
        <div class="row tm-content-row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="bg-[#435c70] min-h-[1px] max-h-none h-auto p-[40px] shadow-[1px_1px_5px_0_#455c71]">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-[1.1rem] font-bold text-white mb-[30px]">
                                Add Product
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form @submit.prevent="submit" class="w-full">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="mb-[15px]">
                                        <Label for="name">Product Name</Label>
                                        <Input id="productName" type="text" required autofocus :tabindex="1"
                                            v-model="form.name" />
                                    </div>

                                    <div class="mb-[15px]">
                                        <Label for="description">Product Description</Label>
                                        <TextArea id="productDescription" type="text" required autofocus :tabindex="2"
                                            v-model="form.description" />
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                    <AppImageUpload :uploadedUrl="uploadedUrl" @file-selected="handleFileUrl" />
                                </div>
                            </div>
                            <div class="mb-[15px] mt-4">
                                <Button type="submit"
                                    class="block h-[50.8px] text-white bg-[#f5a623] border-[#f5a623] font-[90%] py-[13px] px-[28px] transition-all duration-200 ease-in-out max-w-full text-uppercase btn-block btn-primary btn">
                                    Submit
                                </Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
