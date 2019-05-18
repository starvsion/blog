<template>
    <el-row :gutter="10">
        <el-col :span="16" :offset="4">
            <el-card class="box-card">
                <template #header class="clearfix">
                    <h3>Register</h3>
                </template>
                <el-form ref="form" :model="model" :rules="rules" @submit.stop>
                    <el-form-item label="Name" prop="name" :error="errors['name']">
                        <el-input v-model="model.name"></el-input>
                    </el-form-item>
                    <el-form-item label="E-Mail Address" prop="email" :error="errors['email']">
                        <el-input v-model="model.email"></el-input>
                    </el-form-item>
                    <el-form-item label="Password" prop="password" :error="errors['password']">
                        <el-input v-model="model.password" show-password></el-input>
                    </el-form-item>
                    <el-form-item label="Confirm Password"
                                  prop="password_confirmation"
                                  :error="errors['password_confirmation']">
                        <el-input v-model="model.password_confirmation" show-password></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click.native.prevent="submit">
                            Register
                        </el-button>
                    </el-form-item>
                </el-form>
            </el-card>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "Register",
        props: {
            errors: {
                type: Array,
                default: () => []
            }

        },
        data: () => {
            let checkPasswordConfirmation = (rule, value, callback) => {
                if (value === "") {
                    callback(new Error("Please input the passwords again"));
                } else if (value !== this.model.password) {
                    callback(new Error("Your passwords don't match."));
                } else {
                    callback();
                }
            };
            return {
                model: {
                    name: "",
                    email: "",
                    password: "",
                    password_confirmation: ""
                },
                rules: {
                    email: [
                        {
                            required: true,
                            message: "Please Enter your email address",
                            trigger: "blur"
                        },
                        {
                            type: "email",
                            message: "Please enter a valid email address",
                            trigger: "blur"
                        }
                    ],
                    name: [
                        {
                            required: true,
                            message: "Please enter your name",
                            trigger: "blur"
                        }
                    ],
                    password: [
                        {
                            required: true,
                            message: "Please enter your passwords",
                            trigger: "blur"
                        }
                    ],
                    password_confirmation: [
                        {
                            validator: checkPasswordConfirmation,
                            required: true,
                            trigger: "blur"
                        }
                    ]
                }
            };
        },
        methods: {
            submit () {
                this.$refs.form.validate((valid) => {
                    if (valid) {
                        axios.post("/register")
                            .then((response) => {
                                console.log(response);
                            })
                            .catch((error) => {

                            });
                    } else {
                        Message.error("There are errors on your form, please check");
                    }
                });
            }
        }
    };
</script>

<style scoped>

</style>