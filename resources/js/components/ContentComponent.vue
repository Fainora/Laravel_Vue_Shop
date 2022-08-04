<template>
    <section class="first-screen">
        <div class="content">
            <div class="first-screen__content first">
                <div class="first-screen_text">
                    <h2>Зоомагазин товаров от производителя для ваших питомцев</h2>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sapiente ipsam doloremque ad nobis architecto illo, quod nesciunt hic facilis praesentium aut fugit debitis atque doloribus. Excepturi culpa ratione quidem!</h5>
                    <input type="button" class="button" value="Посмотреть каталог">
                </div>
            </div>
            <div class="first-screen__bg-segment">
                <div class="first-screen__bg_text">
                    <h3>Скидки на корм для кошек</h3>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <input type="button" class="button" value="Подробнее">
                </div>
                <img src="/images/cat.png">
            </div>
        </div>

        <div class="bottom">
            <div class="block">Бесплатная доставка</div>
            <div class="block">Бонусная программа</div>
            <div class="block">Акции и скидки</div>
        </div>
    </section>

<hr>

    <section class="first-screen">
        <div class="content">
            <div class="first-screen__content first">
                <div class="first-screen_text">
                    <h2>Зоомагазин товаров от производителя для ваших питомцев</h2>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sapiente ipsam doloremque ad nobis architecto illo, quod nesciunt hic facilis praesentium aut fugit debitis atque doloribus. Excepturi culpa ratione quidem!</h5>
                    <input type="button" class="button" value="Посмотреть каталог">
                </div>
            </div>
            <div class="first-screen__bg-segment">
                <div class="first-screen__bg_text">
                    <h3>Скидки на корм для кошек</h3>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <input type="button" class="button" value="Подробнее">
                </div>
                <img src="/images/cat.png">
            </div>
        </div>

        <div class="bottom">
            <div class="block">Бесплатная доставка</div>
            <div class="block">Бонусная программа</div>
            <div class="block">Акции и скидки</div>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'Content',
    }
</script>

<style lang="scss" scoped>
.first-screen {
    height: calc(100% - 60px);
}
.content {
    display: flex;
    height: 100vh;
}
.first-screen__content {
    width: 50%;

    .first-screen_text {
        margin: 80px;
    }
    h2 {
        margin-bottom: 50px;
    }
}
    .button {
        background: var(--primary);
        color: var(--light);
        border-radius: 30px;
        border: none;
        padding: 15px 20px;
        margin-top: 50px
    }
.first-screen__bg-segment {
    background: var(--primary);
    width: 50%;
    border-radius: 100% 0 0 100%;
    padding: 50px;

    img {
        width: 500px;
        position: relative;
        bottom: -150px;
        right: -20px;
    }
    .first-screen__bg_text {
        position: absolute;
        width: 300px;
        right: 20px;
        padding: 15px;
        margin-top: 50px;
        color: var(--light);
    }
    h3 {
        margin-bottom: 30px;
    }
    .button {
        background: none;
        border: 2px solid var(--light);
    }
}

.bottom {
    z-index: 10;
    position: relative;
    bottom: 125px;
    left: 0;
    display: flex;
    justify-content: space-around;
    color: var(--text);
}
.block {
    margin: 20px;
    background: var(--light);
    padding: 30px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 8px 3px rgba(34, 60, 80, 0.2);
    -moz-box-shadow: 0px 0px 8px 3px rgba(34, 60, 80, 0.2);
    box-shadow: 0px 0px 8px 3px rgba(34, 60, 80, 0.2);
}
</style>
