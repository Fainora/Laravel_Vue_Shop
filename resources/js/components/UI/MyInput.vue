<template>
    <!-- <input :value="modelValue" @input="updateInput" class="input" type="text"> -->
    <div class="input">
        <span class="minus">-</span>
        <span class="num">01</span>
        <span class="plus">+</span>
    </div>
</template>

<script>
export default {
    name: 'my-input',
    props: {
        modelValue: [String, Number]
    },
    methods: {
        updateInput(event) {
            this.$emit('update:modelValue', event.target.value)
        }
    }
}
</script>

<style>
.input {
    border: 1px solid teal;
    padding: 10px 15px;
    margin-top: 15px;
}
</style>
