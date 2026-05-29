import React from 'react'
import { LangProps } from "../../../types/common";
import Image from 'next/image';
import Link from 'next/link';

export default function Certificates({lang}: LangProps) {
  return (
    <section className="certificates">
        <div className="container">
            <div className="certificates__frame">
                <div className="title">
                    <p className="title__sub">Certification</p>
                    <h3>Awards & <br /><span>Recognition</span></h3>
                    <div className="btn"><p><Link href={`/${lang}/certification/`}><span>Learn more</span></Link></p></div>
                </div>
                <p className="certificates__line"><Image loading="lazy" src="/images/certificates_line.png" width={1} height={258} alt="Awards & Recognition" /></p>
                <ul className="certificates__bnr">
                    <li><p><Image loading="lazy" src="/images/certificates_bnr1.png" width={197} height={166} alt="Best Instant Funding Prop Firm 2025" /></p></li>
                    <li><p><Image loading="lazy" src="/images/certificates_bnr2.png" width={197} height={186} alt="Smart Financial Education Platform 2025" /></p></li>
                    <li><p><Image loading="lazy" src="/images/certificates_bnr3.png" width={197} height={166} alt="International Accreditation Council" /></p></li>
                    <li><p><Image loading="lazy" src="/images/certificates_bnr4.png" width={197} height={186} alt="The Financial Crimes Enforcement Network" /></p></li>
                </ul>
            </div>

            <div className="certificates__info">
                <div className="certificates__content">
                    <div className="frame">
                        <div className="desc">
                            <p className="symb top"><Image loading="lazy" src="/images/symb_top.svg" width={28} height={18} alt="Awards & Recognition" /></p>
                            <p className="txt">Clients are provided with a simulated account. Their trading activity on this account is replicated in real-time by our exclusive algorithms to our live firm trading account, generating actual cash flow.</p>
                            <p className="symb bottom"><Image loading="lazy" src="/images/symb_bottom.svg" width={28} height={18} alt="Awards & Recognition" /></p>
                        </div>
                        <p className="certificates__ceo"><Image loading="lazy" src="/images/icon_line_ceo.svg" width={36} height={2} alt="Andrew Anth - WeMasterTrade CEO" />WeMasterTrade CEO</p>
                    </div>
                    <div className="btn btn__download center">
                        <p><Link href={`/${lang}/handbook-page/`}><span>Download Handbook</span></Link></p>
                    </div>
                </div>
                <p className="certificates__video lightbox-item" data-youtube-id="hMIrZSsSAag"><Image style={{borderRadius: "15px"}} loading="lazy" src="/images/certification_video.jpg" width={1398} height={787} alt="WeMasterTrade CEO" /></p>
            </div>
        </div>
    </section>
  )
}
