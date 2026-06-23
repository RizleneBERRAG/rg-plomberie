document.addEventListener("DOMContentLoaded", () => {
    const root = document.documentElement;
    const buttons = document.querySelectorAll("[data-theme-toggle]");

    const moonIcon = `
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14.8 3.2a8.9 8.9 0 1 0 6 15.5a7.8 7.8 0 1 1-6-15.5Z"></path>
            <path d="M17.7 7.2l.45 1.1 1.1.45-1.1.45-.45 1.1-.45-1.1-1.1-.45 1.1-.45.45-1.1Z"></path>
            <path d="M20.4 10.6l.28.7.7.28-.7.28-.28.7-.28-.7-.7-.28.7-.28.28-.7Z"></path>
        </svg>
    `;

    const sunIcon = `
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <circle cx="12" cy="12" r="4.2"></circle>
            <path d="M12 1.8v3"></path>
            <path d="M12 19.2v3"></path>
            <path d="M1.8 12h3"></path>
            <path d="M19.2 12h3"></path>
            <path d="M4.8 4.8l2.1 2.1"></path>
            <path d="M17.1 17.1l2.1 2.1"></path>
            <path d="M17.1 6.9l2.1-2.1"></path>
            <path d="M4.8 19.2l2.1-2.1"></path>
        </svg>
    `;

    const getTheme = () => {
        return root.dataset.theme || "dark";
    };

    const updateButtons = () => {
        const theme = getTheme();
        const isLight = theme === "light";

        document.querySelectorAll("[data-theme-icon]").forEach((icon) => {
            icon.innerHTML = isLight ? sunIcon : moonIcon;
        });

        document.querySelectorAll("[data-theme-label]").forEach((label) => {
            label.textContent = isLight
                ? "Activer le mode sombre"
                : "Activer le mode clair";
        });

        buttons.forEach((button) => {
            button.setAttribute(
                "aria-label",
                isLight ? "Activer le mode sombre" : "Activer le mode clair"
            );

            button.setAttribute("aria-pressed", isLight ? "true" : "false");
        });
    };

    const setTheme = (theme) => {
        root.dataset.theme = theme;
        localStorage.setItem("rg-theme", theme);
        updateButtons();
    };

    buttons.forEach((button) => {
        button.setAttribute("type", "button");

        button.addEventListener("click", () => {
            const nextTheme = getTheme() === "dark" ? "light" : "dark";
            setTheme(nextTheme);
        });
    });

    updateButtons();
});
