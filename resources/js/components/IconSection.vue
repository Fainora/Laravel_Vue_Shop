<template>
    <section id="first-section">
        <div class="fi-box">
            <div class="circle">
                <fa icon="fa-solid fa-truck-fast" />
            </div>
            <div class="text">
                <h5>Free Shipping</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at magna.</p>
            </div>
        </div>
        <div class="fi-box">
            <div class="circle">
                <fa icon="fa-solid fa-rotate-right" />
            </div>
            <div class="text">
                <h5>Returns & Exchanges</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at magna.</p>
            </div>
        </div>
        <div class="fi-box">
            <div class="circle">
                <fa icon="fa-solid fa-comments" />
            </div>
            <div class="text">
                <h5>24/7 Customer Support</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at magna.</p>
            </div>
        </div>
    </section>
</template>

<script>

</script>

<style lang="scss" scoped>
/* First section */
#first-section {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    margin: 30px 0;

    .fi-box {
        display: flex;
        width: 350px;
        text-align: center;
        border-right: 3px solid var(--bs-body-bg);
        border-radius: 4px;
        justify-content: center;
        padding: 20px 15px;

        h6 {
            padding: 9px 8px 6px 8px;
            line-height: 1;
            border-radius: 4px;
            color: var(--text-hover);
            background-color: #fddde4;
        }

        img {
            width: 100%;
            margin-bottom: 10px;
        }
    }
    .fi-box:last-child {
        border: none;
    }
    .fi-box:nth-child(2) h6 {
        background-color: #cdebbc;
    }

    .circle {
        border: 1px solid var(--text-hover);
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100%;
        color: var(--text-hover);
    }

    .text {
        width: 260px;
    }
    p {
        font-size: 14px;
        margin: 0;
        color: #999999;
    }
}


@media (max-width: 1100px) {
    #first-section {
        .fi-box {
            padding: 20px 0;
        }
        .circle {
            width: 50px;
            height: 50px;
        }
        .text {
            width: 200px;
        }
        h5 {
            font-size: 17px;
        }
        p {
            font-size: 13px;
            margin: 0;
        }
    }
}

@media (max-width: 799px) {
    #first-section {
        justify-content: center;
        flex-wrap: wrap;

        .fi-box {
            margin: 15px 15px;
            border-right: 0;
            border-bottom: 3px solid var(--bs-body-bg);
        }
        .fi-box:last-child {
            border-bottom: none;
        }
    }
}

</style>
