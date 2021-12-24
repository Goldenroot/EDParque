<template>
    <div class="chat-widget">
        <div class="chat-widget-header">
            <div class="user-status">
                <div class="user-status-avatar">
                    <div class="user-avatar small no-outline online">
                        <div class="user-avatar-content">
                            <div data-src="img/avatar/03.jpg" class="hexagon-image-30-32" style="width: 30px; height: 32px; position: relative;">
                                <canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas>
                            </div>
                        </div>
                        <div class="user-avatar-progress">
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;">
                                <canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas>
                            </div>
                        </div>
                        <div class="user-avatar-progress-border">
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;">
                                <canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas>
                            </div>
                        </div>
                        <div class="user-avatar-badge">
                            <div class="user-avatar-badge-border">
                                <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;">
                                    <canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas>
                                </div>
                            </div>
                            <div class="user-avatar-badge-content">
                                <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;">
                                    <canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas>
                                </div>
                            </div>
                            <p class="user-avatar-badge-text">16</p>
                        </div>
                    </div>
                </div>
                <p class="user-status-title"><span class="bold">{{ contact ? contact.name : 'Seleciona um Amigo' }}</span></p>
                <p class="user-status-tag online" v-if="contact"><span>@</span>{{contact.slug}}</p>
            </div>
        </div>
        <MessageFeed :contact="contact" :messages="messages" ></MessageFeed>
        <MessageComposer  @send="sendMessage" v-if="contact" ></MessageComposer>
    </div>
</template>

<script>

import MessageFeed from './MessageFeed';
import MessageComposer from './MessageComposer';

export default {
    name: "Conversation",

    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default: []
        }
    },
    methods: {
        sendMessage(text) {
            if (!this.contact) {
                return;
            }
            axios.post('/conversation/send', {
                contact_id: this.contact.id,
                text: text
            }).then((response) => {
                this.$emit('new', response.data);
            })
        }
    },

    components: {MessageComposer, MessageFeed}
}
</script>

<style scoped>

</style>
