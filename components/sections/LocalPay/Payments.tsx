import Image from "next/image";

const paymentLogos = [
    { alt: "Paypal", src: "/images/payments_logo1.png" },
    { alt: "Visa", src: "/images/payments_logo2.png" },
    { alt: "Gpay", src: "/images/payments_logo3.png" },
    { alt: "MasterCard", src: "/images/payments_logo4.png" },
    { alt: "Pay", src: "/images/payments_logo5.png" },
    { alt: "Discover", src: "/images/payments_logo6.png" },
    { alt: "Maestro", src: "/images/payments_logo7.png" },
    { alt: "Bitcoin", src: "/images/payments_logo8.png" },
    { alt: "RBC Financial Group", src: "/images/payments_logo9.png" },
];

export default function Payments() {
    return (
        <section className="payments">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Support Payments</p>
                    <h3>
                        We support payments in all countries via
                        <br />
                        <span>Debit/Credit/Prepaid cards</span>
                    </h3>
                </div>
                <ul className="payments__logo">
                    {paymentLogos.map((logo) => (
                        <li key={logo.src}>
                            <Image loading="lazy" src={logo.src} width={214} height={114} alt={logo.alt} />
                        </li>
                    ))}
                </ul>
            </div>
        </section>
    );
}
