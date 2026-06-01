import React from 'react'
import Image from 'next/image'
import { LangProps } from '../../../types/common'

export default function Hero({lang}: LangProps) {
    return (
        <div className="contact__page mainvisual mainvisual__custombg">
            <div className="mainvisual__img"><Image loading='lazy' src="/images/mainvs_img_contact.png" width="1002" height="583" alt="Contact Us" /></div>
            <div className="container">
                <div className="mainvisual__content">
                    <h2><span>Contact</span> Us</h2>
                    <div className="mainvisual__desc">
                        <p>Have questions or simply want to chat? We’d love to hear from you! Get in touch with us.</p>
                    </div>
                    <div className="btn not_icon">
                        <p><a href="#contact-main"><span>Get Started</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    )
}
