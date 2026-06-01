"use client"

import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'
import { useAccordion } from '../../../hooks/useAccordion';

export default function AboutCeo({lang}: LangProps) {
    const accordion = useAccordion({ defaultOpenIds: ["aboutCeoItem1"] });
    const aboutCeoItem = [
        {
            id: "aboutCeoItem1",
            title: "A MESSAGE FROM OUR MANAGER",
            description: (
                <>
                    Every skilled trader deserves a fair chance to prove themselves. That's why we built WeMasterTrade — a platform where your ability matters more than your starting capital. <br /><br />We created a structured evaluation environment where traders can demonstrate their skills using our virtual trading accounts. Those who consistently perform well are rewarded through our profit-sharing program. <br /><br />Our goal is simple: find talented traders and support their growth.
                </>
            )
        },
        {
            id: "aboutCeoItem2",
            title: "HOW CAN WE OFFER INSTANT FUNDING?",
            description: (
                <>
                    Unlike traditional prop firms, WeMasterTrade doesn’t rely on challenges as a filter. <br /><br />Instead, we have a world-class risk management team and AI-driven trading algorithms that analyze traders in real time. <br /><br />If a trader shows consistent and strategic trading behavior, our system recognizes it. <br /><br />And when we see strong, high-potential trades, we don’t just provide capital—we multiply it. Our system mirrors profitable trades at 2x, 3x, or even 4x within our company’s fund. <br /><br />This allows us to increase overall profitability while ensuring that traders receive up to 90% of payouts. <br /><br />If you’re good, we want to reward you fairly. <br /><br />And if you’re new, we want to give you the opportunity to grow.
                </>
            ),
        },
        {
            id: "aboutCeoItem3",
            title: "ARE WE LEGIT?",
            description:(
                <>
                    We understand—trust is everything. <br /><br />Most importantly, we’ve already paid out millions of dollars to traders worldwide. <br /><br />Our credibility is reinforced by multiple prestigious industry awards, recognizing us as a leader in the prop firm space. <br /><br />At WeMasterTrade, we’re not just another prop firm. <br /><br />We’re built on trust, transparency, and a deep commitment to helping traders succeed. <br /><br />That’s our mission. That’s our vision. <br /><br />We are here to empower traders, whether you’re a seasoned pro or just starting your journey. If you’re ready to take the next step, we’re here to walk that path with you. Let’s build something great together.
                </>
            )
        }
    ];
    return (
        <section className="aboutceo">
            <div className="container">
                <div className="aboutceo__frame">
                    <div className="aboutceo__img">
                        <p className="img"><Image loading="lazy" src="/images/aboutus_ceo.png" width="559" height="672" alt="CEO - Andrew Anth" /> </p>
                    </div>
                    <div className="aboutceo__content">
                        <div className="title">
                            <p className="title__sub">About Us</p>
                            <h3>Manager - <span>Andrew Anth</span></h3>
                        </div>
                        <div className="intro border__glassed">
                            <h4>Hello everyone, I’m Andrew Anth, the Manager of WeMasterTrade.</h4>
                            <div className="desc">
                                <p>Today, I don’t just want to talk about our platform—I want to talk about why we created it. Why we believe in it. And why we believe in you.</p>
                                <p>Being a trader is not easy. I know because I’ve been there. You can have the right strategy, the right mindset, and the discipline... but if you don’t have enough capital, it feels like you’re always one step behind.</p>
                            </div>
                            <p className="note"><Image loading="lazy" src="/images/ic_badge_clr.svg" width="16" height="18" alt="And that’s exactly why WeMasterTrade was born."/>And that’s exactly why WeMasterTrade was born.</p>
                        </div>
                        <div className="cnt">
                            {aboutCeoItem.map((item) => (
                                <div className={`item ${accordion.isOpen(item.id) ? "active" : ""} border__glassed`} key={item.id}>
                                    <p {...accordion.getButtonProps(item.id)} className="accordion-button open">{item.title}</p>
                                    <div className="desc" {...accordion.getContentProps(item.id)}>
                                        <p>{item.description}</p>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
