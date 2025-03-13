const ICON_PATHS = {
    home: "M140.78-206.78v-349.83q0-25.22 11.05-47.59 11.04-22.37 31.13-37.32l233.21-174.92q28.35-21.65 63.83-21.65t63.83 21.65l233.21 174.92q20.09 14.95 31.13 37.32 11.05 22.37 11.05 47.59v349.83q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85h-95.7q-22.08 0-37.54-15.46t-15.46-37.54v-197.74q0-22.09-15.45-37.55-15.46-15.45-37.55-15.45h-63.04q-22.09 0-37.55 15.45-15.45 15.46-15.45 37.55v197.74q0 22.08-15.46 37.54t-37.54 15.46h-95.7q-44.3 0-75.15-30.85-30.85-30.85-30.85-75.15Z",
    blog: "M166.78-100.78q-44.3 0-75.15-30.85-30.85-30.85-30.85-75.15v-546.44q0-44.3 30.85-75.15 30.85-30.85 75.15-30.85h626.44q44.3 0 75.15 30.85 30.85 30.85 30.85 75.15v546.44q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85H166.78Zm116.35-182.61h393.74q16.74 0 28.24-11.5t11.5-28.5q0-17-11.5-28.5t-28.24-11.5H283.13q-16.74 0-28.24 11.5t-11.5 28.5q0 17 11.5 28.5t28.24 11.5Zm.26-156.61h80q17 0 28.5-11.5t11.5-28.5v-156.61q0-17-11.5-28.5t-28.5-11.5h-80q-17 0-28.5 11.5t-11.5 28.5V-480q0 17 11.5 28.5t28.5 11.5ZM520-440h156.61q17 0 28.5-11.5t11.5-28.5q0-17-11.5-28.5t-28.5-11.5H520q-17 0-28.5 11.5T480-480q0 17 11.5 28.5T520-440Zm0-156.61h156.61q17 0 28.5-11.5t11.5-28.5q0-17-11.5-28.5t-28.5-11.5H520q-17 0-28.5 11.5t-11.5 28.5q0 17 11.5 28.5t28.5 11.5Z",
    resume: "M480-408.48q36.39 0 62.44-26.32 26.04-26.33 26.04-62.72t-26.04-62.44Q516.39-586 480-586t-62.44 26.04q-26.04 26.05-26.04 62.44t26.04 62.72q26.05 26.32 62.44 26.32ZM311.52-231.52h336.96V-263q0-26.26-14.7-48.8-14.69-22.55-39.39-33.11-26.56-11.57-54.91-17.57-28.35-6-59.48-6-31.13 0-59.48 6-28.35 6-54.91 17.57-24.7 10.56-39.39 33.11-14.7 22.54-14.7 48.8v31.48Zm401.7 170.74H246.78q-44.3 0-75.15-30.85-30.85-30.85-30.85-75.15v-626.44q0-44.3 30.85-75.15 30.85-30.85 75.15-30.85h277.39q21.09 0 40.4 7.98 19.3 7.98 34.26 22.94L788.3-678.83q14.96 14.96 22.94 34.26 7.98 19.31 7.98 40.4v437.39q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85Z",
    ama: "M859.22-120.17q-9.7 0-19.52-3.85-9.83-3.85-18.09-12.11l-74.48-74.48h-411.3q-44.31 0-75.16-30.85-30.84-30.84-30.84-75.15v-40h430.39q44.3 0 75.15-30.85 30.85-30.84 30.85-75.15v-269.26h40q44.3 0 75.15 30.85 30.85 30.85 30.85 75.15v452.26q0 24.22-16.24 38.83t-36.76 14.61ZM100.78-342.22q-20.52 0-36.76-14.61t-16.24-38.82v-412.83q0-44.3 30.85-75.15 30.85-30.85 75.15-30.85h426.44q44.3 0 75.15 30.85 30.85 30.85 30.85 75.15v265.87q0 44.31-30.85 75.15-30.85 30.85-75.15 30.85h-363.4l-78.99 78.44q-8.27 8.26-17.81 12.1-9.54 3.85-19.24 3.85Z",
    taken: "M61.52-410.87q-15.39-15.39-15.17-37.04.21-21.65 15.61-37.05Q77.35-499.91 99-500.13q21.65-.22 37.04 15.17L269-352l18.8 18.8 18.81 18.81Q322-299 321.78-277.91q-.21 21.09-15.61 36.48-15.95 15.52-37.6 15.74-21.66.21-37.61-15.74L61.52-410.87ZM494-371.65l329.83-329.83q15.39-15.39 36.76-15.17 21.37.21 37.32 15.61 15.53 15.39 16.03 37.04.5 21.65-15.46 37.61L531.61-259.52q-15.96 15.96-37.61 15.96t-37.61-15.96l-170-170q-15.52-15.52-15.24-37.11.28-21.59 15.81-37.54 15.95-15.4 37.54-15.4t36.98 15.4L494-371.65Zm160.52-255.44L531.04-503.61q-14.95 14.96-36.82 14.96t-37.26-14.96q-15.4-15.39-15.4-37.26 0-21.87 15.4-37.26l123.47-123.48q14.96-14.96 36.83-14.96 21.87 0 37.26 14.96 15.39 15.39 15.39 37.26 0 21.87-15.39 37.26Z",
    contact:
        "M479.43-60.78q-86.68 0-162.93-32.91-76.24-32.92-133.07-89.74-56.82-56.83-89.74-133.27-32.91-76.44-32.91-163.35t32.91-163.3q32.92-76.39 89.74-133.22 56.83-56.82 133.27-89.74 76.44-32.91 163.35-32.91t163.3 32.91q76.39 32.92 133.22 89.74 56.82 56.83 89.74 133.07 32.91 76.25 32.91 162.93v58q0 62.76-45.02 106.91-45.03 44.14-109.11 44.14-36.84 0-69.46-15.57Q643-302.65 622-332.91q-26.74 31.26-63.8 46.32-37.07 15.07-78.2 15.07-86.96 0-147.72-60.76-60.76-60.76-60.76-147.72 0-86.96 60.76-147.72 60.76-60.76 147.72-60.76 86.96 0 147.72 60.76 60.76 60.76 60.76 147.72v52.91q0 24.58 16.43 41.6 16.44 17.01 40.73 17.01 24.29 0 40.17-17.01 15.89-17.02 15.89-41.6v-53.48q0-134-93.85-227.56Q614-801.7 480-801.7t-227.85 93.85Q158.3-614 158.3-480t93.57 227.85q93.56 93.85 227.56 93.85h152.09q20.6 0 34.54 13.93Q680-130.43 680-109.83q0 20.4-13.94 34.72-13.94 14.33-34.54 14.33H479.43Zm.67-307.7q46.51 0 78.96-32.55 32.46-32.56 32.46-79.07 0-46.51-32.55-78.96-32.56-32.46-79.07-32.46-46.51 0-78.96 32.55-32.46 32.56-32.46 79.07 0 46.51 32.55 78.96 32.56 32.46 79.07 32.46Z",
    menu: "M160-240q-17 0-28.5-11.5T120-280q0-17 11.5-28.5T160-320h640q17 0 28.5 11.5T840-280q0 17-11.5 28.5T800-240H160Zm0-200q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h640q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H160Zm0-200q-17 0-28.5-11.5T120-680q0-17 11.5-28.5T160-720h640q17 0 28.5 11.5T840-680q0 17-11.5 28.5T800-640H160Z",
    close: "M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z",
    arrow: "M680-624 244-188q-11 11-28 11t-28-11q-11-11-11-28t11-28l436-436H400q-17 0-28.5-11.5T360-720q0-17 11.5-28.5T400-760h320q17 0 28.5 11.5T760-720v320q0 17-11.5 28.5T720-360q-17 0-28.5-11.5T680-400v-224Z",
    homebased:
        "M361.2-443.59h82.39v-101.87h72.82v101.87h82.39v-185.93L480-708.8l-118.8 79.28v185.93ZM480-192.46q120.33-110.08 178.73-198.59 58.4-88.52 58.4-161.91 0-107.31-68.67-175.74t-168.47-68.43q-99.79 0-168.46 68.43-68.66 68.43-68.66 175.74 0 73.39 58.4 161.79 58.4 88.39 178.73 198.71Zm-.06 92.16q-14.9 0-29.75-5.24-14.86-5.24-26.54-15.72-66.43-60.72-117.39-117.96-50.96-57.24-85.05-111.21-34.1-53.98-51.72-104.56-17.62-50.58-17.62-97.97 0-153.28 98.95-244.22 98.95-90.95 229.18-90.95 130.23 0 229.18 90.95 98.95 90.94 98.95 244.22 0 47.39-17.62 97.97t-51.72 104.56q-34.09 53.97-85.05 111.21-50.96 57.24-117.39 117.96-11.71 10.48-26.61 15.72-14.9 5.24-29.8 5.24ZM480-560Z",
    location:
        "M480-192.46q120.33-110.08 178.73-198.59 58.4-88.52 58.4-161.91 0-107.31-68.67-175.74t-168.47-68.43q-99.79 0-168.46 68.43-68.66 68.43-68.66 175.74 0 73.39 58.4 161.79 58.4 88.39 178.73 198.71Zm-.06 92.16q-14.9 0-29.75-5.24-14.86-5.24-26.54-15.72-66.43-60.72-117.39-117.96-50.96-57.24-85.05-111.21-34.1-53.98-51.72-104.56-17.62-50.58-17.62-97.97 0-153.28 98.95-244.22 98.95-90.95 229.18-90.95 130.23 0 229.18 90.95 98.95 90.94 98.95 244.22 0 47.39-17.62 97.97t-51.72 104.56q-34.09 53.97-85.05 111.21-50.96 57.24-117.39 117.96-11.71 10.48-26.61 15.72-14.9 5.24-29.8 5.24ZM480-560Zm0 82.39q34.2 0 58.29-24.1 24.1-24.09 24.1-58.29t-24.1-58.29q-24.09-24.1-58.29-24.1t-58.29 24.1q-24.1 24.09-24.1 58.29t24.1 58.29q24.09 24.1 58.29 24.1Z",
    currentbased:
        "M480-362.39q56 0 101-27.5t71-72.5q-35-29-79-44.5t-93-15.5q-49 0-93 15.5t-79 44.5q26 45 71 72.5t101 27.5Zm0-200q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0 369.93q120.33-110.08 178.73-198.59 58.4-88.52 58.4-161.91 0-107.31-68.67-175.74t-168.47-68.43q-99.79 0-168.46 68.43-68.66 68.43-68.66 175.74 0 73.39 58.4 161.79 58.4 88.39 178.73 198.71Zm0 120.59Q315.17-211.26 233.52-329.36q-81.65-118.1-81.65-223.6 0-153.28 98.95-244.22 98.95-90.95 229.18-90.95 130.23 0 229.18 90.95 98.95 90.94 98.95 244.22 0 105.5-81.65 223.6T480-71.87ZM480-560Z",
    download:
        "M480-342.02q-8.96 0-17.15-3.1-8.2-3.1-14.92-9.81L300.35-502.52q-13.44-13.44-13.06-31.83.38-18.39 13.06-31.82 13.67-13.68 32.32-14.06 18.66-.38 32.33 13.29l69.5 69.5v-265.19q0-19.15 13.17-32.33 13.18-13.17 32.33-13.17t32.33 13.17q13.17 13.18 13.17 32.33v265.19l69.5-69.5q13.43-13.67 32.09-13.41 18.65.26 32.32 13.94 12.92 13.67 13.3 31.94.38 18.27-13.3 31.95L512.07-354.93q-6.72 6.71-14.92 9.81-8.19 3.1-17.15 3.1ZM242.87-151.87q-37.78 0-64.39-26.61t-26.61-64.39v-74.5q0-19.15 13.17-32.33 13.18-13.17 32.33-13.17t32.33 13.17q13.17 13.18 13.17 32.33v74.5h474.26v-74.5q0-19.15 13.17-32.33 13.18-13.17 32.33-13.17t32.33 13.17q13.17 13.18 13.17 32.33v74.5q0 37.78-26.61 64.39t-64.39 26.61H242.87Z",
    back: "m313-440 196 196q12 12 11.5 28T508-188q-12 11-28 11.5T452-188L188-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l264-264q11-11 27.5-11t28.5 11q12 12 12 28.5T508-715L313-520h447q17 0 28.5 11.5T800-480q0 17-11.5 28.5T760-440H313Z",
    stream: "M160-400q-33 0-56.5-23.5T80-480q0-33 23.5-56.5T160-560q33 0 56.5 23.5T240-480q0 33-23.5 56.5T160-400Zm38 144 118-118q11-11 28-11t28 11q11 11 11 28t-11 28L254-200q-11 11-28 11t-28-11q-11-11-11-28t11-28Zm120-332L200-706q-11-11-11-28t11-28q11-11 28-11t28 11l118 118q11 11 11 28t-11 28q-11 11-28 11t-28-11ZM480-80q-33 0-56.5-23.5T400-160q0-33 23.5-56.5T480-240q33 0 56.5 23.5T560-160q0 33-23.5 56.5T480-80Zm0-640q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720Zm106 76 120-118q11-11 27.5-11.5T762-762q11 11 11 28t-11 28L643-587q-12 12-28.5 12T586-587q-11-12-11.5-28.5T586-644Zm120 444L588-318q-11-11-11-28t11-28q11-11 28-11t28 11l118 118q11 11 11 28t-11 28q-11 11-28 11t-28-11Zm94-200q-33 0-56.5-23.5T720-480q0-33 23.5-56.5T800-560q33 0 56.5 23.5T880-480q0 33-23.5 56.5T800-400Z",
};

class BaseIcon extends HTMLElement {
    constructor() {
        super();
        const iconType = this.tagName.toLowerCase().replace("-icon", "");
        const path = ICON_PATHS[iconType];

        if (!path) {
            console.error(`No path defined for icon: ${iconType}`);
            return;
        }
        const viewBox = this.getAttribute("viewBox") || "0 -960 960 960";
        const shadow = this.attachShadow({ mode: "open" });
        shadow.innerHTML = `
            <style>
                :host {
                    --iconsize: 16px;
                    --iconcolor: #404040;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: var(--iconsize);
                    height: var(--iconsize);
                }
                .iconsvg {
                    display: block;
                    width: 100%;
                    height: 100%;
                    fill: var(--iconcolor);
                }
            </style>
            <svg class="iconsvg" xmlns="http://www.w3.org/2000/svg" viewBox="${viewBox}">
                <path d="${path}"/>
            </svg>
        `;
    }
}

function registerIcons() {
    for (const iconName of Object.keys(ICON_PATHS)) {
        const elementName = `${iconName}-icon`;
        if (!customElements.get(elementName)) {
            customElements.define(elementName, class extends BaseIcon {});
        }
    }
}

registerIcons();
