import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "body": {
        "fontFamily": "simplifiedarabic",
        "color": "#555",
        "textAlign": "right",
        "direction": "rtl",
        "backgroundColor": "#F8F8F8"
    },
    "entry-title": {
        "fontSize": 4
    },
    "fontss": {
        "fontSize": 2
    },
    "left_text p": {
        "fontFamily": "AlHarfAlJadidOne !important",
        "textAlign": "center",
        "color": "#fe7200",
        "fontWeight": "bold",
        "fontSize": 22
    },
    "padd": {
        "display": "flex",
        "alignItems": "center",
        "paddingTop": 30,
        "paddingRight": 0,
        "paddingBottom": 30,
        "paddingLeft": 0
    },
    "header-left": {
        "fontFamily": "AlHarfAlJadidOne !important"
    },
    "header-left p": {
        "marginBottom": "0rem !important"
    },
    "animatedParent:not(carousel-caption)": {
        "overflowX": "hidden !important"
    },
    "a:hover": {
        "textDecoration": "none"
    },
    "topbar": {
        "backgroundColor": "#FF7200",
        "borderBottom": "0px solid #0a2544",
        "color": "#fff",
        "lineHeight": 3.85,
        "verticalAlign": "middle"
    },
    "topbar a": {
        "color": "#fff"
    },
    "nav:before": {
        "content": " ",
        "display": "table"
    },
    "nav:after": {
        "content": " ",
        "display": "table"
    },
    "*:before": {
        "WebkitBoxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "boxSizing": "border-box"
    },
    "*:after": {
        "WebkitBoxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "boxSizing": "border-box"
    },
    "topbar links  a:last-child": {
        "color": "#0a2544"
    },
    "topbar nav-top li": {
        "paddingTop": 0,
        "paddingRight": 4,
        "paddingBottom": 0,
        "paddingLeft": 4
    },
    "topbar nav-top li a:hover": {
        "color": "#0a2544"
    },
    "share-links a": {
        "borderRadius": 5,
        "backgroundColor": "#0a2544",
        "color": "#fcfcfc",
        "width": 30,
        "height": 30,
        "marginTop": 0,
        "marginRight": 2,
        "marginBottom": 0,
        "marginLeft": 2,
        "overflow": "hidden",
        "boxShadow": "0 2px 2px 0 rgba(0, 0, 0, .3)",
        "WebkitTransition": "all 0.2s ease 0s",
        "MozTransition": "all 0.2s ease 0s",
        "transition": "all 0.2s ease 0s",
        "display": "inline-flex",
        "verticalAlign": "middle",
        "fontSize": 20
    },
    "share-links share-facebook:before": {
        "content": "\\f09a"
    },
    "share-links a:before": {
        "fontFamily": "FontAwesome",
        "textIndent": 0,
        "lineHeight": 23,
        "height": 22,
        "verticalAlign": "middle",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto"
    },
    "share-links share-youtube:before": {
        "content": "\\f167"
    },
    "share-links share-linkedin:before": {
        "content": "\\f0e1"
    },
    "share-links": {
        "fontSize": 1.4545,
        "verticalAlign": "middle",
        "display": "inline-flex"
    },
    "searchform": {
        "border": "solid 2px #eee",
        "borderRadius": 20,
        "display": "inline-block",
        "lineHeight": 40,
        "fontSize": 13,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "verticalAlign": "middle",
        "background": "#fff",
        "borderColor": "#ccc",
        "boxShadow": "0 1px 1px rgba(0, 0, 0, .075) inset",
        "width": 201,
        "position": "absolute",
        "top": 36
    },
    "searchform text": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform cat": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform button-wrap": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform selectric-cat": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform:before": {
        "content": " ",
        "display": "table",
        "width": 0,
        "height": 0,
        "borderLeft": "7px solid transparent",
        "borderRight": "7px solid transparent",
        "borderBottom": "7px solid #efefef",
        "position": "relative",
        "top": -9,
        "right": 20
    },
    "searchform:after": {
        "content": " ",
        "display": "table"
    },
    "searchform input": {
        "border": "none",
        "paddingTop": 0,
        "paddingRight": 15,
        "paddingBottom": 0,
        "paddingLeft": 20,
        "width": 150,
        "height": 40,
        "lineHeight": 34,
        "borderRadius": 0,
        "color": "#555",
        "background": "transparent",
        "float": "right",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform select": {
        "height": 40,
        "lineHeight": 34,
        "color": "#555",
        "background": "transparent",
        "borderRadius": 0,
        "float": "right",
        "border": "none",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform button": {
        "height": 40,
        "lineHeight": 34,
        "color": "#555",
        "background": "transparent",
        "borderRadius": 0,
        "float": "right",
        "border": "none",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform  fa": {
        "position": "relative",
        "top": -4
    },
    "left": {
        "textAlign": "left"
    },
    "col-4:before": {
        "clear": "both"
    },
    "right": {
        "textAlign": "right"
    },
    "search-toggle": {
        "color": "#999",
        "position": "fixed",
        "right": 30,
        "top": 10
    },
    "menu fixed-top": {
        "backgroundColor": "#0a2544"
    },
    "card-img img": {
        "maxWidth": "100%"
    },
    "founder": {
        "backgroundColor": "#EAEEF3"
    },
    "swiper-container": {
        "width": "100%",
        "height": "100%"
    },
    "swipeswiper-container": {
        "width": "auto !important",
        "height": "auto !important"
    },
    "swiper-slide": {
        "textAlign": "center",
        "fontSize": 18,
        "display": "flex",
        "WebkitBoxPack": "center",
        "MsFlexPack": "center",
        "WebkitJustifyContent": "center",
        "justifyContent": "center",
        "WebkitBoxAlign": "center",
        "MsFlexAlign": "center",
        "WebkitAlignItems": "center",
        "alignItems": "center"
    },
    "card-marg": {
        "marginTop": "10%",
        "marginRight": "10%",
        "marginBottom": "10%",
        "marginLeft": "10%"
    },
    "green": {
        "backgroundColor": "#2baab1"
    },
    "grey": {
        "backgroundColor": "#383f48"
    },
    "red": {
        "backgroundColor": "#e36159"
    },
    "blue": {
        "backgroundColor": "#0a2544"
    },
    "html thumb-info-ribbon-tertiary": {
        "color": "#fff",
        "display": "block",
        "paddingTop": 5,
        "paddingRight": 20,
        "paddingBottom": 5,
        "paddingLeft": 20,
        "position": "absolute",
        "zIndex": 10,
        "top": -15,
        "fontStyle": "italic",
        "right": 30
    },
    "thumb-info-ribbon:before": {
        "borderRightColor": "#000101",
        "borderRight": "10px solid #646464",
        "borderTop": "16px solid transparent",
        "content": "",
        "display": "block",
        "height": 0,
        "left": -10,
        "position": "absolute",
        "top": 0,
        "width": 7
    },
    "cart-custom  card-block": {
        "paddingTop": 0.6,
        "paddingRight": "!important",
        "paddingBottom": 0.6,
        "paddingLeft": "!important"
    },
    "card-marg card-block": {
        "paddingTop": 0.65,
        "paddingRight": 0.65,
        "paddingBottom": 0.65,
        "paddingLeft": 0.65
    },
    "thumb-info-wrapper": {
        "WebkitBackfaceVisibility": "hidden",
        "backfaceVisibility": "hidden",
        "WebkitTransform": "translate3d(0, 0, 0)",
        "MozTransform": "translate3d(0, 0, 0)",
        "MsTransform": "translate3d(0, 0, 0)",
        "OTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)",
        "borderRadius": 4,
        "marginTop": 4,
        "marginRight": 4,
        "marginBottom": 4,
        "marginLeft": 4,
        "overflow": "hidden",
        "display": "block",
        "position": "relative"
    },
    "thumb-info-image": {
        "minHeight": 232,
        "display": "block",
        "backgroundPosition": "center top",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "100% auto",
        "position": "relative",
        "WebkitTransition": "background-position 0.8s linear 0s",
        "MozTransition": "background-position 0.8s linear 0s",
        "transition": "background-position 0.8s linear 0s"
    },
    "thumb-info-wrapper:hover thumb-info-image": {
        "WebkitTransition": "background-position 1s linear 0s",
        "MozTransition": "background-position 1s linear 0s",
        "transition": "background-position 1s linear 0s",
        "backgroundPosition": "center bottom"
    },
    "text h2": {
        "color": "#fe7200"
    },
    "text p": {
        "color": "#5472d2"
    },
    "text": {
        "textAlign": "right"
    },
    "footer": {
        "backgroundRepeat": "repeat",
        "backgroundSize": "auto",
        "backgroundAttachment": "scroll",
        "backgroundPosition": "initial",
        "backgroundImage": "none",
        "color": "#777",
        "backgroundColor": "#002840",
        "minHeight": 200
    },
    "navbar": {
        "background": "#0a2544"
    },
    "navbar-nav li  a": {
        "color": "#fe7200 !important",
        "display": "block",
        "fontSize": 1.2
    },
    "navbar-nav li li a": {
        "fontSize": 15
    },
    "dropdown:hover>dropdown-menu": {
        "display": "block"
    },
    "dropdown>dropdown-menu": {
        "borderTopColor": "#f67200",
        "borderTopWidth": 5,
        "borderTopStyle": "solid"
    },
    "dropdown-menu": {
        "borderRadius": "6px 0px 0px 6px  !important",
        "minWidth": 240,
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "boxShadow": "0 2px 3px rgba(0, 0, 0, 0.15)",
        "top": 32,
        "width": "auto",
        "right": 0,
        "left": "auto"
    },
    "navbar > show > a:focus": {
        "background": "transparent",
        "outline": 0
    },
    "dropdown-menu show > dropdown-toggle::after": {
        "transform": "rotate(90deg)"
    },
    "dropdown-submenu": {
        "position": "relative"
    },
    "dropdown-submenu a::after": {
        "transform": "rotate(-90deg)",
        "position": "absolute",
        "left": 3,
        "top": "40%"
    },
    "dropdown-submenu:hover dropdown-menu": {
        "display": "flex",
        "flexDirection": "column",
        "position": "absolute !important",
        "marginTop": -30,
        "right": "100%"
    },
    "dropdown-submenu:focus dropdown-menu": {
        "display": "flex",
        "flexDirection": "column",
        "position": "absolute !important",
        "marginTop": -30,
        "right": "100%"
    },
    "navbar-nav li": {
        "textAlign": "right"
    },
    "dropdown-item": {
        "textAlign": "right",
        "paddingTop": 4,
        "paddingRight": 0,
        "paddingBottom": 4,
        "paddingLeft": 0
    },
    "lidropdown-item:not(:last-child)": {
        "borderBottom": "solid 1px #ccc"
    },
    "image-box h2": {
        "position": "absolute",
        "bottom": 0,
        "width": "89%",
        "backgroundColor": "rgba(10, 37, 68, 0.69)",
        "fontSize": 15,
        "color": "white",
        "filter": "alpha(opacity=60)",
        "paddingTop": 0.8,
        "paddingRight": 0.8,
        "paddingBottom": 0.8,
        "paddingLeft": 0.8
    },
    "image-box": {
        "border": "solid 5px #fff",
        "borderRadius": 4,
        "maxWidth": "100%",
        "maxHeight": "100%",
        "position": "relative",
        "marginTop": 5,
        "marginRight": 5,
        "marginBottom": 5,
        "marginLeft": 5,
        "width": 300,
        "height": 250,
        "paddingTop": 0,
        "paddingRight": "!important",
        "paddingBottom": 0,
        "paddingLeft": "!important",
        "overflow": "hidden"
    },
    "image": {
        "width": 367,
        "height": 367,
        "backgroundPosition": "center",
        "transition": "all .5s ease",
        "MozTransition": "all .5s ease",
        "MsTransition": "all .5s ease",
        "WebkitTransition": "all .5s ease",
        "OTransition": "all .5s ease",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "cover"
    },
    "image:hover": {
        "transform": "scale(1.5)",
        "MozTransform": "scale(1.5)",
        "WebkitTransform": "scale(1.5)",
        "OTransform": "scale(1.5)",
        "MsTransform": "scale(1.5)",
        "MsFilter": "progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand')",
        "filter": "progid:DXImageTransform.Microsoft.Matrix(    M11=1.5,    M12=0,    M21=0,    M22=1.5,    SizingMethod=\"auto expand\"    )"
    },
    "image:hover:after": {
        "content": "' '",
        "position": "absolute",
        "left": 0,
        "right": 0,
        "top": 0,
        "bottom": 0,
        "backgroundColor": "rgba(0,0,0,.25)"
    },
    "image-box:hover thumb-info-action-icon-primary": {
        "position": "absolute",
        "top": 0,
        "background": "#0a2544",
        "paddingTop": 11,
        "paddingRight": 11,
        "paddingBottom": 11,
        "paddingLeft": 11,
        "borderBottomLeftRadius": 22,
        "color": "#fff",
        "transition": "all 1s ease",
        "MozTransition": "all 1s ease",
        "MsTransition": "all 1s ease",
        "WebkitTransition": "all 1s ease",
        "OTransition": "all 1s ease"
    },
    "img-thumb": {
        "border": "2px solid #fe7e17",
        "maxWidth": "100%"
    },
    "imageDetails a": {
        "position": "relative",
        "display": "block"
    },
    "imageDetails zoom": {
        "position": "absolute",
        "bottom": 19,
        "right": 17,
        "color": "#fff",
        "background": "#0a2544e8",
        "borderRadius": "50%",
        "width": 27,
        "height": 27,
        "textAlign": "center"
    },
    "mySlider": {
        "width": 1000,
        "height": 398,
        "overflow": "hidden",
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "mySlider li": {
        "width": 166.6,
        "height": 398,
        "float": "left",
        "boxShadow": "0 28px 14px rgba(0,0,0,0.5), 0 10px 10px rgba(0,0,0,0.22)"
    },
    "navtab": {
        "backgroundColor": "#0a2544",
        "borderTop": "2px solid #fe7200",
        "borderBottom": "2px solid #fe7200"
    },
    "breadcrumb-item": {
        "float": "right",
        "color": "#ccc"
    },
    "breadcrumb": {
        "backgroundColor": "transparent",
        "borderRadius": 0
    },
    "breadcrumb-item a": {
        "color": "#fe7200"
    },
    "breadcrumb-itemactive a": {
        "color": "#f7be68"
    },
    "breadcrumb-itemactive": {
        "color": "#ccc"
    },
    "pagination li": {
        "display": "block",
        "background": "#eee",
        "paddingTop": 0,
        "paddingRight": 4,
        "paddingBottom": 0,
        "paddingLeft": 4,
        "color": "#333",
        "border": "solid 1px #ccc",
        "marginTop": 0,
        "marginRight": 5,
        "marginBottom": 0,
        "marginLeft": 5
    },
    "pagination li a": {
        "color": "#fa743b"
    },
    "pagination": {
        "background": "#eee",
        "border": "solid 1px #ccc",
        "borderRadius": 0,
        "paddingTop": 5,
        "paddingRight": 0,
        "paddingBottom": 5,
        "paddingLeft": 0,
        "marginTop": 10
    },
    "services h2": {
        "color": "#fa743b"
    },
    "header_certification": {
        "textAlign": "center",
        "color": "#fa743b"
    },
    "title_cert": {
        "fontSize": 16,
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "lineHeight": 26,
        "textAlign": "center",
        "color": "#01121d !important"
    },
    "seniors img": {
        "minWidth": 250,
        "maxHeight": 250,
        "width": 200,
        "height": 200
    },
    "category": {
        "color": "#fa743b",
        "fontSize": 15,
        "lineHeight": 1.5,
        "textAlign": "center"
    },
    "experience": {
        "color": "#fa743b",
        "fontSize": 15,
        "lineHeight": 1.5,
        "textAlign": "center"
    },
    "experience span": {
        "color": "#1B1E47"
    },
    "consultants": {
        "border": "solid 1px #ccc",
        "display": "block",
        "background": "#fff",
        "boxShadow": "rgba(0, 0, 0, 0.38) 2px 2px 4px"
    },
    "shake": {
        "color": "#fa743b"
    },
    "consultants title_cert": {
        "textAlign": "right !important"
    },
    "consultants category": {
        "textAlign": "right !important"
    },
    "timeline": {
        "listStyle": "none",
        "paddingTop": 20,
        "paddingRight": 0,
        "paddingBottom": 20,
        "paddingLeft": 0,
        "position": "relative"
    },
    "timeline:before": {
        "top": 0,
        "bottom": 0,
        "position": "absolute",
        "content": " ",
        "width": 3,
        "backgroundColor": "#eeeeee",
        "left": "50%",
        "marginLeft": -1.5
    },
    "timeline > li": {
        "marginBottom": 20,
        "position": "relative"
    },
    "timeline > li:before": {
        "content": " ",
        "display": "table"
    },
    "timeline > li:after": {
        "content": " ",
        "display": "table",
        "clear": "both"
    },
    "timeline > li > timeline-panel": {
        "width": "46%",
        "float": "left",
        "border": "1px solid #d4d4d4",
        "borderRadius": 2,
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 20,
        "paddingLeft": 20,
        "position": "relative",
        "WebkitBoxShadow": "0 1px 6px rgba(0, 0, 0, 0.175)",
        "boxShadow": "0 1px 6px rgba(0, 0, 0, 0.175)"
    },
    "timeline > li > timeline-panel:before": {
        "position": "absolute",
        "top": 26,
        "right": -15,
        "display": "inline-block",
        "borderTop": "15px solid transparent",
        "borderLeft": "15px solid #ccc",
        "borderRight": "0 solid #ccc",
        "borderBottom": "15px solid transparent",
        "content": " "
    },
    "timeline > li > timeline-panel:after": {
        "position": "absolute",
        "top": 27,
        "right": -14,
        "display": "inline-block",
        "borderTop": "14px solid transparent",
        "borderLeft": "14px solid #fff",
        "borderRight": "0 solid #fff",
        "borderBottom": "14px solid transparent",
        "content": " "
    },
    "timeline > li > timeline-badge": {
        "color": "#fff",
        "width": 50,
        "height": 50,
        "lineHeight": 50,
        "fontSize": 1.4,
        "textAlign": "center",
        "position": "absolute",
        "top": 16,
        "left": "50%",
        "marginLeft": -25,
        "backgroundColor": "#999999",
        "zIndex": 100,
        "borderTopRightRadius": "50%",
        "borderTopLeftRadius": "50%",
        "borderBottomRightRadius": "50%",
        "borderBottomLeftRadius": "50%"
    },
    "timeline > litimeline-inverted > timeline-panel": {
        "float": "right"
    },
    "timeline > litimeline-inverted > timeline-panel:before": {
        "borderLeftWidth": 0,
        "borderRightWidth": 15,
        "left": -15,
        "right": "auto"
    },
    "timeline > litimeline-inverted > timeline-panel:after": {
        "borderLeftWidth": 0,
        "borderRightWidth": 14,
        "left": -14,
        "right": "auto"
    },
    "timeline-badgeprimary": {
        "backgroundColor": "#2e6da4 !important"
    },
    "timeline-badgesuccess": {
        "backgroundColor": "#3f903f !important"
    },
    "timeline-badgewarning": {
        "backgroundColor": "#f0ad4e !important"
    },
    "timeline-badgedanger": {
        "backgroundColor": "#d9534f !important"
    },
    "timeline-badgeinfo": {
        "backgroundColor": "#5bc0de !important"
    },
    "timeline-title": {
        "marginTop": 0,
        "color": "#fe7200",
        "fontSize": 1.2,
        "paddingTop": 1,
        "paddingRight": 1,
        "paddingBottom": 1,
        "paddingLeft": 1,
        "textAlign": "right"
    },
    "timeline-body > p": {
        "marginBottom": 0
    },
    "timeline-body > ul": {
        "marginBottom": 0
    },
    "timeline-body > p + p": {
        "marginTop": 5
    },
    "services description": {
        "textAlign": "justify"
    },
    "timeimags": {
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto",
        "textAlign": "center",
        "height": 200
    },
    "timeline-panel": {
        "textAlign": "center"
    },
    "centers": {
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "timeline-body": {
        "textAlign": "justify",
        "fontSize": 0.8
    },
    "listdate": {
        "border": "solid 1px #464a4c",
        "borderRadius": 5,
        "width": 13,
        "marginTop": 1,
        "marginRight": "auto",
        "marginBottom": 3,
        "marginLeft": "auto",
        "textAlign": "center",
        "paddingTop": 0.5,
        "paddingRight": 0.5,
        "paddingBottom": 0.5,
        "paddingLeft": 0.5,
        "color": "#fe7200",
        "fontWeight": "bold",
        "background": "#fff"
    },
    "more": {
        "float": "left",
        "border": "solid 1px #ccc",
        "borderRadius": 5,
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "color": "#FFE",
        "background": "#002840",
        "minWidth": 100,
        "textAlign": "center"
    },
    "accordion card-header": {
        "background": "#0A2544",
        "color": "#ec971f"
    },
    "accordion card-header a": {
        "color": "#fe7200",
        "textDecoration": "none",
        "fontSize": 22,
        "fontWeight": "bold"
    },
    "accordion card-header a:hover": {
        "textDecoration": "none"
    },
    "accordion card-header card-linkcollapsed:after": {
        "fontFamily": "'FontAwesome'",
        "content": "\\f078",
        "float": "left",
        "transition": "all 1s ease"
    },
    "accordion card-header card-link:after": {
        "fontFamily": "'FontAwesome'",
        "content": "\\f077",
        "float": "left"
    },
    "certifications img": {
        "height": 200,
        "width": 200
    },
    "ownersCa carousel-item img": {
        "width": "300px !important"
    },
    "imgss": {
        "width": 200,
        "height": 200
    },
    "go": {
        "textAlign": "center"
    },
    "h5des-title": {
        "color": "#555",
        "fontSize": 14
    },
    "tb": {
        "backgroundColor": "rgb(10, 37, 68)",
        "color": "#fe7e17",
        "textAlign": "center",
        "fontWeight": "bold",
        "paddingTop": 0.3,
        "paddingRight": 0.3,
        "paddingBottom": 0.3,
        "paddingLeft": 0.3
    },
    "th": {
        "textAlign": "center",
        "paddingTop": 0.3,
        "paddingRight": 0.3,
        "paddingBottom": 0.3,
        "paddingLeft": 0.3,
        "display": "flex",
        "alignItems": "center"
    },
    "th:nth-child(even)": {
        "backgroundColor": "rgb(243, 236, 218)"
    },
    "th:nth-child(odd)": {
        "backgroundColor": "#fff"
    },
    "maxi": {
        "maxHeight": 40 * vh
    },
    "carousel-caption": {
        "textAlign": "center",
        "background": "#000000ad !important"
    },
    "intro": {
        "height": 44 * vh,
        "overflow": "hidden",
        "paddingBottom": 1
    },
    "mores": {
        "display": "block",
        "width": 100,
        "borderRadius": 5,
        "float": "left",
        "color": "#FF9800"
    },
    "dropdown-itemactive": {
        "background": "transparent !important"
    },
    "dropdown-item:active": {
        "background": "transparent !important"
    },
    "navbar-nav ul  li a": {
        "color": "#002840 !important"
    },
    "contact h4": {
        "color": "#FF9800",
        "fontSize": 17,
        "paddingTop": 1,
        "paddingRight": 1,
        "paddingBottom": 1,
        "paddingLeft": 1
    },
    "titles": {
        "fontSize": 12,
        "textAlign": "right"
    },
    "list_item img": {
        "width": 40,
        "height": 40,
        "float": "left"
    },
    "list_item": {
        "listStyle": "none",
        "display": "-webkit-inline-box",
        "marginTop": 0.5,
        "marginRight": 0,
        "marginBottom": 0.5,
        "marginLeft": 0
    },
    "lis": {
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0
    },
    "ul": {
        "marginTop": 0,
        "marginRight": 0,
        "marginBottom": 0,
        "marginLeft": 0,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0
    },
    "titles a": {
        "color": "#ccc"
    },
    "carousel-item img": {
        "width": "100% !important"
    },
    "nav": {
        "width": "90%",
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "heightover": {
        "overflow": "hidden"
    },
    "sites": {
        "height": "100px !important"
    },
    "accor ul": {
        "listStyle": "none",
        "paddingRight": 1
    },
    "accor li": {
        "paddingTop": 1
    },
    "foot span": {
        "color": "#f26c3b"
    },
    "navbar-toggler-right": {
        "top": "-3rem !important"
    },
    "reverse a": {
        "backgroundColor": "#fff !important",
        "color": "#002840 !important"
    }
});