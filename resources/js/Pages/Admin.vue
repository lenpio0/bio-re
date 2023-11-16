<template>
    <div class="p-6 bg-white-bg text-black-text ">
        <form @submit.prevent="update" enctype="multipart/form-data">
        <div class="p-8 max-w-[56rem] mx-auto flex flex-wrap justify-between rounded-2xl px-16 bg-pink-champ">
            <h1 class="text-3xl mx-auto text-center font-h">Modifier le contenu</h1>
            <div class="block w-full mt-6">
                <label class="block text-center">Tarifs bio-résonance</label>
                <textarea v-model="form.resonance" rows="6" class="w-full rounded-2xl py-4 resize-none border-0 bg-white-bg"></textarea>
            </div>
            <div class="block w-full mt-6">
                <label class="block text-center">Tarifs lahochi</label>
                <textarea v-model="form.massage" rows="6" class="w-full rounded-2xl py-4 resize-none border-0 bg-white-bg"></textarea>
            </div>
            <div class="block w-[48%] my-6">
                <label class="block text-center">Contact email</label>
                <input v-model="form.mail" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-[48%] my-6">
                <label class="block text-center">Contact téléphone</label>
                <input v-model="form.tel" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-[48%] my-6">
                <label class="block text-center">Adresse 1</label>
                <input v-model="form.adress1" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-[48%] my-6">
                <label class="block text-center">Adresse 2</label>
                <input v-model="form.adress2" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-full my-6 text-center">
                <label class="block">Lien Tiktok</label>
                <input v-model="form.tiktok" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-full my-6">
                <label class="block text-center">Lien Instagram</label>
                <input v-model="form.insta" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="block w-full my-4">
                <label class="block text-center" @click="debug">Lien Facebook</label>
                <input v-model="form.fb" class="w-full rounded-3xl pl-3 py-1.5 bg-white-bg">
            </div>
            <div class="w-full">
                
                <input type="file" ref="photo" @change="previewImage">
                <span @click="deleteImg">Supprimer l'image</span>
                <img v-if="preview" :src="preview" class="max-w-80 max-h-80">
            </div>
            <button class="block mx-auto text-center my-4 bg-rose-300 px-4 py-2 rounded-3xl">Update</button>
        </div>
    </form>
    <button @click="debug">debug</button>
    </div>
</template>

<script>

    export default {
        props: { 
            content: Object,
        },
        methods: {
            update() {
                if (this.$refs.photo) {
                    if (this.$refs.photo.files[0] !== undefined) {
                        this.form.pp = this.$refs.photo.files[0];
                    } else {
                        this.form.pp = this.content.pp;
                    }
                }
                console.log(this.form.pp)
                this.form.post(route('content.store', 1));
                console.log(this.form.pp)
            },
            debug() {
                console.log("form", this.form, "content", this.content)
            },
            previewImage(e) {
                const file = e.target.files[0];
                this.preview = URL.createObjectURL(file);
            },
            deleteImg() {
                this.content.pp = 'delete';
                this.preview = '';
            }
        },
        data() {
            return {
                form: this.$inertia.form({
                    resonance: this.content.resonance,
                    massage: this.content.massage,
                    mail: this.content.mail,
                    tel: this.content.tel,
                    adress1: this.content.adress1,
                    adress2: this.content.adress2,
                    tiktok: this.content.tiktok,
                    insta: this.content.insta,
                    fb: this.content.fb,
                    pp: this.content.pp
                }),
                preview:this.content?.pp,
            }
        },
    }
</script>