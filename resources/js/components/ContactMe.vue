<template>
    <el-card class="m-auto w-50" v-loading="isBusy">
        <template #header class="clearfix">
            <h3>Contact Me</h3>
        </template>
        <el-form ref="form" :model="model" :rules="rules" label-position="top" @submit.native="submit">
            <el-form-item label="Your Name" prop="name">
                <el-input v-model="model.name"></el-input>
            </el-form-item>
            <el-form-item label="E-Mail Address" prop="email">
                <el-input v-model="model.email"></el-input>
            </el-form-item>
            <el-form-item label="Message" prop="message">
                <el-input
                    type="textarea"
                    v-model="model.message"
                    :rows="4">
                </el-input>
            </el-form-item>
            <el-form-item class="text-center">
                <el-button type="primary" @click="submit">Submit</el-button>
            </el-form-item>
        </el-form>
    </el-card>
</template>

<script>
    export default {
        name: "ContactMe",
        data: () => {
            return {
                model: {
                    name: "",
                    email: "",
                    message: ""
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
                    message: [
                        {
                            required: true,
                            message: "Please enter your message",
                            trigger: "blur"
                        }
                    ]
                },
                isBusy: true
            };
        },
        mounted () {
            this.isBusy = false;
        },
        methods: {
            submit () {
                this.$refs.form.validate((valid) => {
                    if (valid) {
                        this.isBusy = true;
                        axios.post("/contact-me", this.model)
                            .then(() => {
                                this.$alert("Your information has been submitted, I will get back to you as soon as possible.")
                                    .then(() => {
                                        this.model = {};
                                    });
                            })
                            .catch((error) => {
                                Message.error(error.response.data.message);
                            })
                            .finally(() => {
                                this.isBusy = false;
                            });
                    } else {
                        Message.error("There are errors on your form, please check");
                    }
                });
            }
        }
    };
</script>
