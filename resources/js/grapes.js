import { createApp } from 'vue';
import GrapesEditor from './components/custom/GrapesEditor.vue';
import '../css/app.css';

const app = createApp({});
app.component('grapes-editor', GrapesEditor);
app.mount('#grapes-app');
