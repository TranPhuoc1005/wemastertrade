import Image from "next/image";

export default function Hero() {
    return (
        <div className="blog__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img">
                <Image src="/images/mainvs_img_blog.png" width={1423} height={740} alt="Blog" />
            </div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2>
                        <span>Blog</span>
                    </h2>
                    <div className="mainvisual__desc">
                        <p>Tips, Tricks &amp; News for Evaluation Trader.</p>
                    </div>
                    <div className="btn not_icon">
                        <p>
                            <a href="#content">
                                <span>Get Started</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
}
