<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3'
import { Label } from '@/components/custom/ui/label'
import { Input } from '@/components/custom/ui/input'
import { Button } from '@/components/custom/ui/button'
import InputError from '@/components/custom/InputError.vue'

const form = useForm({
  email: '',
  password: '',
  remember: false,
})

const submit = () => {
  // eslint-disable-next-line no-undef
  form.post(route('login'), {
    onFinish: () => form.reset('password'),
  })
}
</script>

<template>

    <Head title="Log in" />

    <div class="mb-[60px] mt-[57px] container">
        <div class="row">
            <div class="col-12 mx-auto max-w-[470px]">
                <div class="bg-[#435c70] min-h-[1px] max-h-[none] h-auto p-[40px] shadow-md">
                    <div class="row">
                        <div class="col-12 text-center mb-4">
                            <div class="font-bold text-white">
                                Log In
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form @submit.prevent="submit">
                                <div class="mb-[15px]">
                                    <Label for="email">Username</Label>
                                    <Input id="email" type="email" required autofocus :tabindex="1" autocomplete="email"
                                        v-model="form.email" />
                                    <InputError :message="form.errors.email" class="mt-2" />
                                </div>
                                <div class="mb-[15px] mt-3">
                                    <Label for="password">Password</Label>
                                    <Input id="password" type="password" required autofocus :tabindex="1"
                                        v-model="form.password" />
                                    <InputError :message="form.errors.password" class="mt-2" />
                                </div>
                                <div class="mb-[15px] mt-4">
                                    <Button type="submit"
                                        class="block h-[50.8px] text-white bg-[#f5a623] border-[#f5a623] font-[90%] py-[13px] px-[28px] transition-all duration-200 ease-in-out max-w-full text-uppercase btn-block btn-primary btn">
                                        Login
                                    </Button>

                                    <Button type="submit"
                                        class="mt-4 block h-[50.8px] text-white bg-[#f5a623] border-[#f5a623] font-[90%] py-[13px] px-[28px] transition-all duration-200 ease-in-out max-w-full text-uppercase btn-block btn-primary btn">
                                        Forgot your password?
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
