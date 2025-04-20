<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3'
import { Input } from '@/components/custom/ui/input'
import { Label } from '@/components/custom/ui/label'
import { TextArea } from '@/components/custom/ui/textarea'
import { Button } from '@/components/custom/ui/button'

const form = useForm({
  name: '',
  description: '',
})

const submit = () => {
  // eslint-disable-next-line no-undef
  form.post(route('admin.category.store'), {
  })
}
</script>

<template>

    <Head title="New Category" />

    <div class="container mb-[60px] mt-[57px]">
        <div class="row tm-content-row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="bg-[#435c70] min-h-[1px] max-h-none h-auto p-[40px] shadow-[1px_1px_5px_0_#455c71]">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-[1.1rem] font-bold text-white mb-[30px]">
                                Add Category
                            </div>
                        </div>
                        <div class="col-12">
                            <form @submit.prevent="submit">
                                <div class="mb-[15px]">
                                    <Label for="name">Category Name</Label>
                                    <Input id="categoryName" type="text" required autofocus :tabindex="1"
                                        v-model="form.name" />
                                </div>

                                <div class="mb-[15px]">
                                    <Label for="name">Category Description</Label>
                                    <TextArea id="categoryDescription" type="text" required autofocus :tabindex="2"
                                        v-model="form.description" />
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
    </div>
</template>
