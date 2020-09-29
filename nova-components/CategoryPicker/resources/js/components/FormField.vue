<template>
    <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
        <template slot="field">
            <select ref="multiselect" :id="field.name"></select>
<!--            <select ref="multiselect" multiple="multiple" :id="field.name"></select>-->
        </template>
    </default-field>
</template>
<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'
import $ from 'jquery'
import 'select2'
import 'select2/dist/css/select2.css'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''

            $(this.$refs.multiselect).select2({
                width: '100%',
                data: this.field.options,
            })

            console.log(this.field)
            console.log(this.field.options)
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {

            const values = $(this.$refs.multiselect).val()

            formData.append(this.field.attribute, values || '')
        },

        handleChange(value) {
            this.value = value
        },
    },
}
</script>
