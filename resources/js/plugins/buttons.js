const plugin = require('tailwindcss/plugin')

const buttons = plugin(
    function({ addComponents, theme }) {
        const buttons = {
            '.button': {
                display: 'inline-flex',
                alignItems: 'center',
                justifyContent: 'center',
                fontWeight: theme('fontWeight.medium'),
                borderRadius: theme('borderRadius.lg'),
                cursor: theme('cursor.pointer'),
            },
            '.button-default' :{
                fontSize: theme('fontSize.base'),
                paddingRight: theme('padding.4'),
                paddingLeft: theme('padding.4'),
                paddingTop: theme('padding.2'),
                paddingBottom: theme('padding.2'),
            },
            '.button-xs': {
                fontSize: theme('fontSize.xs'),
                paddingRight: theme('padding.3'),
                paddingLeft: theme('padding.3'),
                paddingTop: theme('padding[0.5]'),
                paddingBottom: theme('padding[0.5]')
            },
            '.button-sm': {
                fontSize: theme('fontSize.sm'),
                paddingRight: theme('padding.4'),
                paddingLeft: theme('padding.4'),
                paddingTop: theme('padding.1'),
                paddingBottom: theme('padding.1')
            },
            '.button-lg': {
                fontSize: theme('fontSize.lg'),
                paddingRight: theme('padding.6'),
                paddingLeft: theme('padding.6'),
                paddingTop: theme('padding.3'),
                paddingBottom: theme('padding.3'),
            },
            '.button-anemic': {
                color: theme('colors.gray.900'),
                background: theme('colors.white'),
                borderWidth: theme('borderWidth.DEFAULT'),
                borderColor: theme('colors.gray.200'),
                '&:hover': {
                    backgroundColor: theme('colors.gray.100')
                },
            },
            '.button-primary': {
                color: theme('colors.white'),
                backgroundColor: theme('colors.primary.500'),
                '&:hover': {
                    backgroundColor: theme('colors.primary.600')
                },
            },
            '.button-secondary': {
                color: theme('colors.white'),
                backgroundColor: theme('colors.gray.500'),
                '&:hover': {
                    backgroundColor: theme('colors.gray.600')
                },
            },
            '.button-danger': {
                color: theme('colors.white'),
                backgroundColor: theme('colors.red.500'),
                '&:hover': {
                    backgroundColor: theme('colors.red.600')
                },
            },
            '.button-outline-primary': {
                color: theme('colors.primary.500'),
                borderWidth: theme('borderWidth.DEFAULT'),
                borderColor: theme('colors.primary.500'),
                backgroudColor: theme('colors.transparent'),
                '&:hover': {
                    color: theme('colors.white'),
                    backgroundColor: theme('colors.primary.500'),
                },
            },
            '.button-outline-danger': {
                color: theme('colors.red.500'),
                borderWidth: theme('borderWidth.DEFAULT'),
                borderColor: theme('colors.red.500'),
                backgroudColor: theme('colors.transparent'),
                '&:hover': {
                    color: theme('colors.white'),
                    backgroundColor: theme('colors.red.500'),
                },
            },
            '.button-outline-secondary': {
                color: theme('colors.gray.500'),
                borderWidth: theme('borderWidth.DEFAULT'),
                borderColor: theme('colors.gray.500'),
                backgroudColor: theme('colors.transparent'),
                '&:hover': {
                    color: theme('colors.white'),
                    backgroundColor: theme('colors.gray.500'),
                },
            },
            '.button-link-primary': {
                paddingRight: theme('padding.0'),
                paddingLeft: theme('padding.0'),
                color: theme('colors.primary.500'),
                '&:hover': {
                    color: theme('colors.primary.600'),
                },
            },
            '.button-link-secondary': {
                paddingRight: theme('padding.0'),
                paddingLeft: theme('padding.0'),
                color: theme('colors.gray.500'),
                '&:hover': {
                    color: theme('colors.gray.600'),
                },
            },
        }

        addComponents({ ...buttons })
    }
);

module.exports = buttons;