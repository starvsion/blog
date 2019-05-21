<template>
    <el-card class="box-card">
        <template #header class="clearfix">
            <h3>Contact Me</h3>
        </template>
        <el-form ref="form" :model="form" label-position="top" @submit.native.stop>
            <el-form-item label="Your Name">
                <el-input placeholder="placeholder"></el-input>
            </el-form-item>
            <el-form-item label="E-Mail Address">
                <el-input placeholder="placeholder"></el-input>
            </el-form-item>
            <el-form-item label="Message">
                <el-input
                    type="textarea"
                    :rows="4">
                </el-input>
            </el-form-item>
            <el-form-item>
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
                }
            };
        },
          methods: {
            submit () {
                this.$refs.form.validate((valid) => {
                    if (valid) {
                        axios.post("/contact-me")
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
