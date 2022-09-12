<template>
    <section id="page-header" class="about-header">
        <h2>Contact</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <fa icon="fa-solid fa-map" />
                    <p>123 Road, 10 Street, Moscow</p>
                </li>
                <li>
                    <fa icon="fa-solid fa-envelope" />
                    <p>contact@example.com</p>
                </li>
                <li>
                    <fa icon="fa-solid fa-phone" />
                    <p>contact@example.com</p>
                </li>
                <li>
                    <fa icon="fa-solid fa-clock" />
                    <p>Monday to Saturday: 10:00 am to 18:00 pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.3729499442316!2d37.61531071582839!3d55.75202328055309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14a3bda86e6c055f!2z0JDQu9C10LrRgdCw0L3QtNGA0L7QstGB0LrQuNC5INGB0LDQtA!5e0!3m2!1sru!2skz!4v1660138006760!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="images/default.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>
                    Phone: +7(912)345-67-89 <br>
                    Email: contact@example.com</p>
            </div>
            <div>
                <img src="images/default.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>
                    Phone: +7(912)345-67-89 <br>
                    Email: contact@example.com</p>
            </div>
            <div>
                <img src="images/default.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>
                    Phone: +7(912)345-67-89 <br>
                    Email: contact@example.com</p>
            </div>
        </div>
    </section>

    <newsletters />
</template>

<script>
    import Newsletters from '../components/Newsletters.vue';

    export default {
        name: 'Contact',
        components: {
            Newsletters,
        },
        mounted() {
            document.title = "Contact";
        }
    }
</script>

<style lang="scss" scoped>
#contact-details {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#contact-details .details {
    width: 40%;
}
#contact-details .details span,
#form-details form span {
    font-size: 12px;
}
#contact-details .details h2,
#form-details form h2 {
    font-size: 26px;
    line-height: 35px;
    padding: 20px 0;
}
#contact-details .details h3 {
    font-size: 16px;
    padding-bottom: 15px;
}
#contact-details .details li {
    list-style: none;
    display: flex;
    padding: 10px 0;
}
#contact-details .details li i{
    font-size: 14px;
}
#contact-details .details li p {
    margin: 0;
    font-size: 14px;
    padding-left: 22px;
}
#contact-details .map {
    width: 55%;
    height: 400px;
}
#contact-details .map iframe {
    width: 100%;
    height: 100%;
}
#form-details {
    display: flex;
    justify-content: space-between;
    margin: 30px;
    padding: 80px;
    border: 1px solid #e1e1e1;
}
#form-details form {
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
#form-details form input,
#form-details form textarea {
    width: 100%;
    padding: 12px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #e1e1e1;
}
#form-details form button {
    background-color: var(--text-hover);
    color: var(--light);;
}
#form-details .people div{
    padding-bottom: 25px;
    display: flex;
    align-items: flex-start;
}
#form-details .people div img {
    width: 65px;
    height: 65px;
    object-fit: cover;
    margin-right: 15px;
}
#form-details .people div p {
    margin: 0;
    font-size: 13px;
    line-height: 25px;
}
#form-details .people div span {
    display: block;
    font-size: 16px;
    font-weight: 600;
    color: var(--dark);;
}
</style>
