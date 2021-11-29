<template>

    <div class="user-preview small">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid" style="background: url(&quot;img/cover/23.jpg&quot;) center center / cover no-repeat;">
            <img src="img/cover/23.jpg" alt="cover-23" style="display: none;">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
                <!-- USER SHORT DESCRIPTION AVATAR -->
                <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-68-74" data-src="img/avatar/03.jpg" style="width: 68px; height: 74px; position: relative;"><canvas width="68" height="74" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->

                    <!-- USER AVATAR PROGRESS -->
                    <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-84-92" style="width: 84px; height: 92px; position: relative;"><canvas width="84" height="92" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS -->

                    <!-- USER AVATAR PROGRESS BORDER -->
                    <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-84-92" style="width: 84px; height: 92px; position: relative;"><canvas width="84" height="92" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR PROGRESS BORDER -->

                    <!-- USER AVATAR BADGE -->
                    <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-28-32" style="width: 28px; height: 32px; position: relative;"><canvas width="28" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->

                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-dark-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->

                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">16</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                </a>
                <!-- /USER SHORT DESCRIPTION AVATAR -->

                <!-- USER SHORT DESCRIPTION TITLE -->
                <p class="user-short-description-title"><a href="profile-timeline.html">Nick Grissom</a></p>
                <!-- /USER SHORT DESCRIPTION TITLE -->

                <!-- USER SHORT DESCRIPTION TEXT -->
                <p class="user-short-description-text">aka Phantom Streamer</p>
                <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->

            <div class="badge-list small"></div>

            <div class="user-stats">
                <!-- USER STAT -->
                <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">562</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">posts</p>
                    <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->

                <!-- USER STAT -->
                <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">77</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">friends</p>
                    <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->

                <!-- USER STAT -->
                <div class="user-stat">
                    <!-- USER STAT TITLE -->
                    <p class="user-stat-title">2.3k</p>
                    <!-- /USER STAT TITLE -->

                    <!-- USER STAT TEXT -->
                    <p class="user-stat-text">visits</p>
                    <!-- /USER STAT TEXT -->
                </div>
                <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <div class="social-links small"></div>
        </div>
        <!-- /USER PREVIEW INFO -->

        <!-- USER PREVIEW FOOTER -->
        <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
                <!-- BUTTON -->
                <p class="button void void-secondary">
                    <!-- BUTTON ICON -->
                    <svg class="button-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                    </svg>
                    <!-- /BUTTON ICON -->
                </p>
                <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
                <!-- BUTTON -->
                <p class="button void void-primary">
                    <!-- BUTTON ICON -->
                    <svg class="button-icon icon-comment">
                        <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /BUTTON ICON -->
                </p>
                <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
        </div>
        <!-- /USER PREVIEW FOOTER -->
    </div>
</template>

<script>
export default {
    name: "StudentCard",

    data(){
        return{
            student_name : '',
            student_slug : '',
            student_avatar : '',
            student_banner : '',
        }
    },

    props: ["student_id"],

    mounted(){
        window.axios.get('/api/cl_user/' + this.student_id).then(res => {
            this.student = res.data;
            this.student_name = this.student['name'];
            this.student_slug = this.student['slug'];
            this.student_avatar = this.student['avatar'];
            this.student_banner = this.student['banner'];
        });

        window.axios.get('/check/' + this.student_id).then(res => {
            console.log(res.data);
        });

    }
}
</script>

<style scoped>

</style>
