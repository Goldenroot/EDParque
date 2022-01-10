<template>

    <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed" style="z-index: 2">

        <a class="user-avatar small no-outline online" href="/profile">
            <div class="user-avatar-content d-flex align-items-center justify-content-center">
                <img id="navigation-widget-small-user-image" :src="this.user.avatar" style="width: 30px; height: 32px; position: relative; top: 0px; left: 0px; border-radius: 20px;">
            </div>
        </a>

        <ul class="menu small" style="padding: 0px">

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/home" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                    <i class="fas fa-home" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 500; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/overview" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                    <i class="fal fa-signal-alt-3" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 500; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>


            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/schools" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                    <i class="fas fa-school" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 500; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/estudantes" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Amigos">
                    <i class="fas fa-users" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/amigos" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Descobrir Pessoas">
                    <i class="fas fa-user-plus" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/pedidos" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Amigos Pendentes">
                    <i class="fas fa-user-clock" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>


            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/messenger" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Mensagens">
                    <i class="far fa-comment-alt" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>


            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/notificacoes" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Notificações">
                    <i class="fas fa-bell" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="/definicoes" style="position: relative;" data-toggle="tooltip" data-placement="right" title="" data-original-title="Definições">
                    <i class="fas fa-cog" style="position: absolute; top: 14px; left: 14px; pointer-events: none; font-size: 20px; font-weight: 400; transition: all .2s ease-in-out; color: #adafca;"></i>
                </a>
            </li>

        </ul>
    </nav>

</template>

<script>
export default {
    name: "SideLeftMenu",

    props: {
        user: {
            type: Object,
            required: true
        },
    }
}
</script>

<style scoped>

</style>
