<script setup lang="ts">
import { ref, watch } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'
import { Input } from '@/components/custom/ui/input'
import { Label } from '@/components/custom/ui/label'
import { TextArea } from '@/components/custom/ui/textarea'
import { Button } from '@/components/custom/ui/button'
import { FileUpload } from '@/components/custom/ui/file_upload'
import { SelectItem } from '@/components/custom/ui/select'

interface Categories {
    id: number;
    name: string;
}

interface Props {
    categories: Categories[];
}

const props = defineProps<Props>()

const form = useForm({
  name: '',
  description: '',
  pictureUrl: '',
  price: 0,
  htmlContent: '',
  categoryId: '',
})

const categoryOptions = ref<{ value: number; label: string }[]>([])

watch(
  () => props.categories,
  (newCategories) => {
    categoryOptions.value = newCategories.map(c => ({
      value: c.id,
      label: c.name,
    }))
  },
  { immediate: true },
)

const submit = () => {
  // eslint-disable-next-line no-undef
  form.post(route('admin.product.store'), {
  })
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

                                    <div class="mb-[15px]">
                                        <Label for="categoryId">Category</Label>
                                        <SelectItem id="category" v-model="form.categoryId" :options="categoryOptions"
                                            placeholder="Select a category" class="rounded" />
                                    </div>

                                    <div class="mb-[15px]">
                                        <Label for="price">Product Price</Label>
                                        <Input id="priceName" type="number" required autofocus :tabindex="1"
                                            v-model="form.price" />
                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                    <FileUpload v-model="form.pictureUrl" />
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
