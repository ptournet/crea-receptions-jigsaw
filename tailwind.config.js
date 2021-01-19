const colors = require("tailwindcss/colors");

module.exports = {
    purge: {
        content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"]
    },
    theme: {
        extend: {
            height: {
                "1.4": "5px",
                "100": "100px",
                "201": "201px",
                "300": "300px",
                "349": "349px",
                "432": "432px",
                "480": "480px",
                "514": "514px",
                "633": "633px",
                "683": "683px",
                "698": "698px"
            },
            inset: {
                "80px": "80px",
                "95px": "95px",
                "-30px": "-30px",
                "-60px": "-60px",
                "-80px": "-80px"
            },
            lineHeight: {
                inherit: "inherit"
            },
            margin: {
                "18": "4.5rem",
                "-50px": "-50px",
                "80px": "80px",
                "-80px": "-80px"
            },
            maxWidth: {
                "829": "829px",
                "929": "929px",
                "1166": "1166px"
            },
            minHeight: {
                "349": "349px"
            },
            padding: {
                "14prct": "14%",
                "45px": "45px",
                "55px": "55px"
            },
            spacing: {
                "100": "100px"
            },
            width: {
                "1.4": "5px",
                "15": "60px",
                "55prct": "55%",
                "140": "140px",
                "177": "177px",
                "200prct": "200%",
                "213": "213px",
                "300": "300px",
                "544": "544px",
                "900": "900px"
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
            "3xl": [
                "35px", "0.8em"
            ],
            "7xl": [
                "76px", "0.8em"
            ],
            "9xl": [
                "95px", "0.8em"
            ],
            "16xl": ["160px", "214px"]
        }
    },
    variants: {},
    plugins: []
};
