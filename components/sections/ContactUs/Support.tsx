import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'

export default function Support({lang}: LangProps) {
    return (
        <section className="support">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Need support?</p>
                    <h3>We will <span>help you!</span></h3>
                    <p className="txt">Connect WeMasterTrade</p>
                </div>
                <div className="support__content">
                    <ul>
                        <li><a href="javascript:void(0)" id="hubspot"><Image loading="lazy" src="/images/contact_ic1.png" width="79" height="78" alt="Hubspot" /></a></li>
                        <li><a href="https://page.line.me/wemastertrade_jp" target="_blank"><Image loading="lazy" src="/images/contact_ic2.png" width="91" height="78" alt="Line" /></a></li>
                        <li><a href="https://page.line.me/wemastertrade" target="_blank"><Image loading="lazy" src="/images/contact_ic3.png" width="91" height="78" alt="Line" /></a></li>
                        <li><a href="https://www.facebook.com/wemastertradeglobal" target="_blank"><Image loading="lazy" src="/images/contact_ic4.png" width="78" height="78" alt="Facebook" /></a></li>
                        <li><a href="https://discord.com/invite/5HQtMu24Uq" target="_blank"><Image loading="lazy" src="/images/contact_ic5.png" width="79" height="79" alt="Discord" /></a></li>
                        <li><a href="https://t.me/lovewecopytrade/" target="_blank"><Image loading="lazy" src="/images/contact_ic6.png" width="78" height="78" alt="Telegram" /></a></li>
                        <li><a href="https://www.linkedin.com/company/wecopytradefintech/" target="_blank"><Image loading="lazy" src="/images/contact_ic7.png" width="78" height="78" alt="linkedin" /></a></li>
                        <li><a href="https://www.instagram.com/wemastertradeglobal/" target="_blank"><Image loading="lazy" src="/images/contact_ic8.png" width="78" height="78" alt="Instagram" /></a></li>
                        <li><a href="https://twitter.com/WeCopyTrade" target="_blank"><Image loading="lazy" src="/images/contact_ic9.png" width="78" height="78" alt="Twitter" /></a></li>
                        <li><a href="https://wa.me/+17787430279/" target="_blank"><Image loading="lazy" src="/images/contact_ic10.png" width="78" height="78" alt="Whatsapp" /></a></li>
                        <li><a href="https://zalo.me/622522548625458374/" target="_blank"><Image loading="lazy" src="/images/contact_ic11.png" width="78" height="79" alt="Zalo" /></a></li>
                        <li><a href="mailto:support@wemastertrade.com" target="_blank"><Image loading="lazy" src="/images/contact_ic12.png" width="79" height="79" alt="Gmail" /></a></li>
                        <li><a href="https://faq.wemastertrade.com/" target="_blank"><Image loading="lazy" src="/images/contact_ic13.png" width="78" height="79" alt="FAQ" /></a></li>
                    </ul>
                </div>
            </div>
        </section>
    )
}
