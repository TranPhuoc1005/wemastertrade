import Image from "next/image";

export default function Hero() {
    return (
        <div className="localpay__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img">
                <Image src="/images/mainvs_img_localpay.png" width={1920} height={2035} alt="Platforms" />
            </div>
            <div className="container">
                <div className="mainvisual__content center">
                    <h2>
                        <span>
                            Payment Methods
                            <br />
                            Made Simple
                        </span>
                    </h2>
                    <div className="mainvisual__desc">
                        <p>
                            We make it easy for you to accept multiple payment methods online. Just follow the
                            <br />
                            instructions to payment. It&apos;s simple!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
}
