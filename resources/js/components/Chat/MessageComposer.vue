<template>
    <form class="chat-widget-form">
        <div class="form-row split">
            <div class="form-item">
                <div class="interactive-input small">
                    <input type="text" id="chat-widget-message-text-2" name="chat_widget_message_text_2" v-model="message" @keydown.enter="send" placeholder="Escreve uma mensagem...">
                    <div class="interactive-input-icon-wrap actionable">
                        <div data-title="Send Photo" class="tooltip-wrap text-tooltip-tft" style="position: relative;">
                            <svg class="interactive-input-icon icon-camera">
                                <use xlink:href="#svg-camera"></use>
                            </svg>
                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -40.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;">
                                <p class="xm-tooltip-text">Send Photo</p>
                            </div>
                        </div>
                    </div>
                    <div class="interactive-input-action">
                        <svg class="interactive-input-action-icon icon-cross-thin">
                            <use xlink:href="#svg-cross-thin"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="form-item auto-width">
                <p class="button primary padded" v-on:click="send">
                    <svg class="button-icon no-space icon-send-message">
                        <use xlink:href="#svg-send-message"></use>
                    </svg>
                </p>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "MessageComposer",

    data() {
        return {
            message: ''
        };
    },

    methods: {
        send(e) {
            e.preventDefault();

            if (this.message == '') {
                return;
            }
            this.$emit('send', this.message);
            this.message = '';
        }
    }
}
</script>

<style scoped>

</style>
