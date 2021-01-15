const colors = require("tailwindcss/colors");

module.exports = {
    purge: {
        content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"]
    },
    theme: {
        extend: {
            height: {
                "349": "349px",
                "514": "514px",
                "698": "698px"
            },
            inset: {
                "80px": "80px",
                "-80px": "-80px"
            },
            maxWidth: {
                "829": "829px",
                "1166": "1166px"
            },
            minHeight: {
                "349": "349px"
            },
            width: {
                "544": "544px"
            }
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            anis: {
                DEFAULT: "#bed00f"
            }
        },
        fontFamily: {
            base: [
                "Arial", "Helvetica", "sans-serif"
            ],
            sans: ["Nunito"],
            script: ["Black Jack"]
        },
        fontSize: {
            xs: [
                "12px", "18px"
            ],
            sm: [
                "14px", "20px"
            ],
            base: [
                "16px", "24px"
            ],
            lg: [
                "18px", "26px"
            ],
            xl: [
                "24px", "32px"
            ],
            "7xl": [
                "76px", "0.8em"
            ],
            "9xl": ["95px"],
            "16xl": ["160px"]
        }
    },
    variants: {},
    plugins: []
};
