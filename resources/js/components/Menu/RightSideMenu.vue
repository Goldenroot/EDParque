<template>

    <aside id="chat-widget-messages" class="chat-widget sidebar right closed" style="z-index: 2;">

        <div class="chat-widget-messages" data-simplebar="init" style="height: 552px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">

            <div class="simplebar-content" style="padding: 0px">

            <div class="chat-widget-message" v-for="contact in contacts">
                <div class="user-status">
                    <div class="user-status-avatar">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" :data-src="contact.avatar" style="width: 30px; height: 32px; position: relative;">
                                    <img data-v-fdbe9c1c="" id="navigation-widget-small-user-image" :src="contact.avatar" style="width: 30px; height: 32px; position: relative; top: 0px; left: 0px; border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="user-status-title"><span class="bold">{{ contact.name }}</span></p>
                    <p class="user-status-text small">Can you stream the new game?</p>
                    <p class="user-status-timestamp floaty">2hrs</p>
                </div>
            </div>

        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 735px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 414px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>


        <div class="chat-widget-button" id="chat-menu-button">
            <div class="chat-widget-button-icon">
                <div class="burger-icon">
                    <div class="burger-icon-bar"></div>
                    <div class="burger-icon-bar"></div>
                    <div class="burger-icon-bar"></div>
                </div>
            </div>
            <p class="chat-widget-button-text">Mensagens / Contactos</p>
        </div>
    </aside>

</template>

<script>
export default {
    name: "RightSideMenu",

    props:{
        contacts: {
            type: Array,
            default: []
        },
    },

}
</script>

<style scoped>

[data-simplebar] {
    position: relative;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
    align-items: flex-start;
}

.simplebar-wrapper {
    overflow: hidden;
    width: inherit;
    height: inherit;
    max-width: inherit;
    max-height: inherit;
}

.simplebar-mask {
    direction: inherit;
    position: absolute;
    overflow: hidden;
    padding: 0;
    margin: 0;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: auto !important;
    height: auto !important;
    z-index: 0;
}

.simplebar-offset {
    direction: inherit !important;
    box-sizing: inherit !important;
    resize: none !important;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 0;
    margin: 0;
    -webkit-overflow-scrolling: touch;
}

.simplebar-content-wrapper {
    direction: inherit;
    box-sizing: border-box !important;
    position: relative;
    display: block;
    height: 100%; /* Required for horizontal native scrollbar to not appear if parent is taller than natural height */
    width: auto;
    /* visibility: visible; */
    max-width: 100%; /* Not required for horizontal scroll to trigger */
    max-height: 100%; /* Needed for vertical scroll to trigger */
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.simplebar-content-wrapper::-webkit-scrollbar,
.simplebar-hide-scrollbar::-webkit-scrollbar {
    width: 0;
    height: 0;
}

.simplebar-content:before,
.simplebar-content:after {
    content: ' ';
    display: table;
}

.simplebar-placeholder {
    max-height: 100%;
    max-width: 100%;
    width: 100%;
    pointer-events: none;
}

.simplebar-height-auto-observer-wrapper {
    box-sizing: inherit !important;
    height: 100%;
    width: 100%;
    max-width: 1px;
    position: relative;
    float: left;
    max-height: 1px;
    overflow: hidden;
    z-index: -1;
    padding: 0;
    margin: 0;
    pointer-events: none;
    flex-grow: inherit;
    flex-shrink: 0;
    flex-basis: 0;
}

.simplebar-height-auto-observer {
    box-sizing: inherit;
    display: block;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    height: 1000%;
    width: 1000%;
    min-height: 1px;
    min-width: 1px;
    overflow: hidden;
    pointer-events: none;
    z-index: -1;
}

.simplebar-track {
    z-index: 1;
    position: absolute;
    right: 0;
    bottom: 0;
    pointer-events: none;
    overflow: hidden;
}

[data-simplebar].simplebar-dragging .simplebar-content {
    pointer-events: none;
    user-select: none;
    -webkit-user-select: none;
}

[data-simplebar].simplebar-dragging .simplebar-track {
    pointer-events: all;
}

.simplebar-scrollbar {
    position: absolute;
    right: 2px;
    width: 4px;
    min-height: 10px;
}

.simplebar-scrollbar:before {
    position: absolute;
    content: '';
    background: #adafca;
    border-radius: 7px;
    left: 0;
    right: 0;
    opacity: 0;
    transition: opacity 0.2s linear;
}

.simplebar-scrollbar.simplebar-visible:before {
    /* When hovered, remove all transitions from drag handle */
    opacity: .4;
    transition: opacity 0s linear;
}

.simplebar-track.simplebar-vertical {
    top: 0;
    width: 11px;
}

.simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
    top: 2px;
    bottom: 2px;
}

.simplebar-track.simplebar-horizontal {
    left: 0;
    height: 11px;
}

.simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
    height: 100%;
    left: 2px;
    right: 2px;
}

.simplebar-track.simplebar-horizontal .simplebar-scrollbar {
    right: auto;
    left: 0;
    top: 2px;
    height: 7px;
    min-height: 0;
    min-width: 10px;
    width: auto;
}

/* Rtl support */
[data-simplebar-direction='rtl'] .simplebar-track.simplebar-vertical {
    right: auto;
    left: 0;
}

.hs-dummy-scrollbar-size {
    direction: rtl;
    position: fixed;
    opacity: 0;
    visibility: hidden;
    height: 500px;
    width: 500px;
    overflow-y: hidden;
    overflow-x: scroll;
}

.simplebar-hide-scrollbar {
    position: fixed;
    left: 0;
    visibility: hidden;
    overflow-y: scroll;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

/*--------------------
    CUSTOM STYLES
--------------------*/
[data-simplebar].navigation-widget {
    position: fixed;
}

[data-simplebar].navigation-widget .simplebar-scrollbar {
    right: 4px;
}

</style>
