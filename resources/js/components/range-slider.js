import noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css'

window.rangeSlider = function (data) {
    return {
        rangeSlider: null,
        init() {
            noUiSlider.create(this.$refs.range, {
                ...data.options
            })
        },
        getValues() {
            this.$wire.set(this.model, this.$refs.range.noUiSlider.get());
        },
        ...data
    }
}

