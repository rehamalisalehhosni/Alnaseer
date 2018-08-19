import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "navbar-light navbar-nav nav-link": {
        "color": "rgb(64, 64, 64)"
    },
    "btco-menu li > a": {
        "paddingTop": 10,
        "paddingRight": 15,
        "paddingBottom": 10,
        "paddingLeft": 15,
        "color": "#000"
    },
    "btco-menu active a:focus": {
        "background": "transparent",
        "outline": 0
    },
    "btco-menu li a:focus": {
        "background": "transparent",
        "outline": 0
    },
    "navbar > show > a:focus": {
        "background": "transparent",
        "outline": 0
    },
    "dropdown-menu show > dropdown-toggle::after": {
        "transform": "rotate(-90deg)"
    }
});