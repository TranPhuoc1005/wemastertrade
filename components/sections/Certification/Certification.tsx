import React from 'react'
import { LangProps } from '../../../types/common'
import Image from 'next/image'

export default function Certification({lang}: LangProps) {
    return (
        <section className="certification">
            <div className="container">
                <div className="certification__content">
                    <div className="item">
                        <div className="img">
                            <p className="lightbox-item" data-src="/images/instant-asia.png"><Image loading="lazy" src="/images/instant-asia-thumb.jpg" width="294" height="420" alt="Instant Asia" />
                            </p>
                            <p className="lightbox-item" data-src="/images/instant-badge.png"><Image loading="lazy" src="/images/instant-badge-thumb.png" width="294" height="420" alt="Instant Badge" />
                            </p>
                        </div>
                        <div className="cnt">
                            <h3>Top Instant Funding Innovation Asia 2025</h3>
                            <div className="desc">
                                <p>WeMasterTrade has been recognized with the Top Instant Funding Innovation Asia 2025 award by TrustFinance, highlighting its advancement in automated evaluation  technology and modernized trading operations. This recognition strengthens WeMasterTrade’s position within the prop-trading industry and reflects its ongoing efforts to enhance efficiency and transparency for the global trading community.</p>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="img">
                            <p className="lightbox-itemPDF"><a href="/images/WMT-Legal-Opinion-Thailand.pdf" target="_blank"><Image src="/images/legal-thai.jpg" width={294} height={420} alt="Legal Thai" /></a></p>
                            <p className="lightbox-itemPDF"><a href="/images/WMT-Legal-Opinion-Malaysia.pdf" target="_blank"><Image src="/images/legal-malay.jpg" width={294} height={420} alt="Legal Malay" /></a></p>
                        </div>
                        <div className="cnt">
                            <h3>Global Compliance & Legal Recognition</h3>
                            <div className="desc">
                                <p>WeMasterTrade is committed to operating with full transparency and adherence to legal standards across all countries in which we operate. Our trading simulation platform has been independently reviewed by reputable international law firms and confirmed to be an educational, fully virtual model—not providing financial services, not executing real trades, not offering financial advisory services, fund management, or investment activities. As such, our operations do not fall under financial licensing requirements of regulatory authorities in the respective jurisdictions.</p>
                                <p>These legal confirmations affirm that WeMasterTrade is permitted to operate lawfully under its current model, in full compliance with local regulations. We are currently legally recognized in: Thailand, Malaysia. (Additional countries can be added here in the future.)</p>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="img">
                            <p className="lightbox-item" data-src="/images/certification_img1.jpg"><Image loading="lazy" src="/images/certification_img1.jpg" width="593" height="420" alt="Best Instant Funding Prop Firm 2025" />
                            </p>
                        </div>
                        <div className="cnt">
                            <div className="item__logo"><Image loading="lazy" src="/images/certification_logo1.png" width="150" height="150" alt="Best Instant Funding Prop Firm 2025" />
                            </div>
                            <h3>Best Instant Funding<br />Prop Firm 2025</h3>
                            <div className="desc">
                                <p>WeMasterTrade has been honored with the Best Instant Funding Prop Firm 2025 award, presented by Forex Daily Info, recognizing its outstanding contributions to innovating instant evaluating solutions and empowering traders with seamless access to capital. This award reaffirms WeMasterTrade’s position in the industry and its commitment to providing top-tier services to the trading community.</p>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="img">
                            <p className="lightbox-item" data-src="/images/certification_img2.jpg"><Image loading="lazy" src="/images/certification_img2.jpg" width="593" height="420" alt="Smart Financial Education Platform 2025" />
                            </p>
                        </div>
                        <div className="cnt">
                            <div className="item__logo"><Image loading="lazy" src="/images/certification_logo2.png" width="150" height="150" alt="Smart Financial Education Platform 2025" />
                            </div>
                            <h3>Smart Financial Education<br />Platform 2025</h3>
                            <div className="desc">
                                <p>WeMasterTrade has been awarded the Smart Financial Education Platform 2025 title by Forex Daily Info, recognizing its exceptional contributions to advancing financial education and empowering traders with innovative learning resources. This accolade highlights WeMasterTrade’s commitment to providing top-tier educational tools and fostering financial literacy within the trading community.</p>
                            </div>
                        </div>
                    </div>
                    <div className="item">
                        <div className="img">
                            <p className="lightbox-item" data-src="/images/WECOPYTRADE-2015.png"><Image loading="lazy" src="/images/certification_img3.jpg" width="294" height="420" alt="International Accreditation Council (IAC)" />
                            </p>
                            <p className="lightbox-item" data-src="/images/WECOPYTRADE-2018.png"><Image loading="lazy" src="/images/certification_img4.jpg" width="294" height="420" alt="International Accreditation Council (IAC)" />
                            </p>
                        </div>
                        <div className="cnt">
                            <h3>International Accreditation<br />Council (IAC)</h3>
                            <div className="desc">
                                <p>WeMasterTrade is proud to have received ISO certification from the International Accreditation Council (IAC), a prestigious organization that provides recognition to organizations meeting internationally recognized standards for quality and performance.<br />This important milestone, with license codes QMS.2024.60261 and EOM.2024.60262, certifies that we meet quality standards in delivering top-notch training and support services to WeMasterTrade's traders.<br />Explore detailed information about our certification and verify our credentials <a href="https://iacouncil.org/find-certified-organization/" target="_blank" className="link_normal">here</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
