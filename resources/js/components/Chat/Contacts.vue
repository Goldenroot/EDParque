<template>

    <div class="chat-widget static">
        <div data-simplebar="init" class="chat-widget-messages">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="chat-widget-message" v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'active': contact == selected }">
                                    <div class="user-status">
                                        <div class="user-status-avatar">
                                            <div class="user-avatar small no-outline">
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
                                        <p class="user-status-title"><span class="bold">{{ contact.name }}</span></p>
                                        <p class="user-status-text"><span>@</span>{{contact.slug}}</p>
                                        <p class="user-status-timestamp floaty">2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 954px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 362px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
        <form class="chat-widget-form">
            <div class="interactive-input small">
                <input type="text" id="chat-widget-search-2" name="chat_widget_search_2" placeholder="Search Messages...">
                <div class="interactive-input-icon-wrap">
                    <svg class="interactive-input-icon icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>
                </div>
                <div class="interactive-input-action">
                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Contacts",

    props: {
        contacts: {
            type: Array,
            default: []
        }
    },
    data() {
        return {
            selected: this.contacts.length ? this.contacts[0] : null
        };
    },
    methods: {
        selectContact(contact) {
            this.selected = contact;
            this.$emit('selected', contact);
        }
    },
    computed: {
        sortedContacts() {
            return _.sortBy(this.contacts, [(contact) => {
                if (contact == this.selected) {
                    return Infinity;
                }
                return contact.unread;
            }]).reverse();
        }
    }
}
</script>

<style scoped>

</style>
