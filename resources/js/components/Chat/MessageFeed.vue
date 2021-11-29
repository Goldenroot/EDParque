<template>
    <div data-simplebar="init" class="chat-widget-conversation">
        <div v-if="contact">
            <div class="simplebar-wrapper" style="margin: -35px -28px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: scroll;" ref="feed">
                            <div class="simplebar-content" style="padding: 35px 28px;">

                                <!--                            <div class="chat-widget-speaker left">-->
                                <!--                                <div class="chat-widget-speaker-avatar">-->
                                <!--                                    <div class="user-avatar tiny no-border">-->
                                <!--                                        <div class="user-avatar-content">-->
                                <!--                                            <div data-src="img/avatar/03.jpg" class="hexagon-image-24-26" style="width: 24px; height: 26px; position: relative;">-->
                                <!--                                                <canvas width="24" height="26" style="position: absolute; top: 0px; left: 0px;"></canvas>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>-->
                                <!--                                <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>-->
                                <!--                            </div>-->

                                <div class="chat-widget-speaker" v-for="message in messages" :class="`message${message.to == contact.id ? ' right' : 'left'}`" :key="message.id">
                                    <p class="chat-widget-speaker-message">{{ message.text }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 430px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MessageFeed",

    props: {
        contact: {
            type: Object
        },
        messages: {
            type: Array,
            required: true
        }
    },
    methods: {
        scrollToBottom() {
            setTimeout(() => {
                this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
            }, 50);
        }
    },
    watch: {
        contact(contact) {
            this.scrollToBottom();
        },
        messages(messages) {
            this.scrollToBottom();
        }
    }
}
</script>

<style scoped>

</style>
