import Image from 'next/image'
import React from 'react'

export default function Hero() {
    return (
        <div className="mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image loading="lazy" src="/images/mainvs_img_promotions.png" width="1567" height="900" alt="Promotions" /></div>
            <div className="container">
                <div className="mainvisual__content">
                    <h1 className="h2"><span>Promotions</span></h1>
                    <div className="mainvisual__desc">
                        <p>WeMasterTrade rewards you for your trading skills and allows you to earn more. Work with the Best Platform and get the latest Offers around the world. Our promotions help you increase your performance-based rewards without large investments. So, create an account and get the opportunity to make more money with WeMasterTrade Exclusive Promotions.</p>
                    </div>
                    <div className="btn not_icon">
                        <p><a href="#content"><span>Bonuses And Promotions</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
