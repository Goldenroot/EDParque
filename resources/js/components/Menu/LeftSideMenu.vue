<template>

    <nav id="navigation-widget-small" style="z-index: 2" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

        <a class="user-avatar small no-outline online" href="profile-timeline.html">
            <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
            </div>
        </a>

        <ul class="menu small">

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href=" " data-title="Streams" style="position: relative;">
                    <img src="https://img.icons8.com/fluency/50/000000/newsfeed.png" class="menu-item-link-icon icon-streams"/>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href=" " data-title="Events" style="position: relative;">
                    <img src="https://img.icons8.com/color/48/000000/body-type-overweight.png" class="menu-item-link-icon icon-streams"/>
                </a>
            </li>

            <li class="menu-item active">
                <a class="menu-item-link text-tooltip-tfr" href=" " data-title="Forums" style="position: relative;">
                    <img src="https://img.icons8.com/color/48/000000/conference-call--v1.png" class="menu-item-link-icon icon-streams"/>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href=" " data-title="Marketplace" style="position: relative;">
                    <img class="menu-item-link-icon icon-streams" src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-exam-elearning-and-education-justicon-flat-justicon.png"/>
                </a>
            </li>
        </ul>
    </nav>

</template>

<script>
export default {
    name: "SideLeftMenu"
}
</script>

<style scoped>

</style>
