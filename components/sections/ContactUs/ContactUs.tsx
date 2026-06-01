import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common';

export default function ContactUs({lang}: LangProps) {
    return (
                <section id="contact-main" className="contact">
            <div className="container">
                <div className="contact__frame">
                    <div className="contact__info">
                        <div className="item">
                            <div className="icon"><Image loading="lazy" src="/images/contact_info_ic1.png" width="90" height="90" alt="" /></div>
                            <div className="cnt">
                                <h4>Platforms Operated by</h4>
                                <div className="desc">
                                    <p>Ground Floor, The Sotheby building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia.</p>
                                    <p className="link link__location"></p>
                                </div>
                            </div>
                        </div>
                        <div className="item">
                            <div className="icon"><Image loading="lazy" src="/images/contact_info_ic2.png" width="90" height="90" alt="Phone Number" /></div>
                            <div className="cnt">
                                <h4>Phone Number</h4>
                                <div className="desc">
                                    <p className="link">
                                        <a href="tel:+18555943886">+1 855 594 3886</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="item">
                            <div className="icon"><Image loading="lazy" src="/images/contact_info_ic3.png" width="90" height="90" alt="Email Address" /></div>
                            <div className="cnt">
                                <h4>Email Address</h4>
                                <div className="desc">
                                    <p className="link">
                                        <a href="support@wemastertrade.com"><span>support@wemastertrade.com</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="item">
                            <div className="icon"><Image loading="lazy" src="/images/contact_info_ic4.png" width="90" height="90" alt="Partnerships" /></div>
                            <div className="cnt">
                                <h4>Partnerships</h4>
                                <div className="desc">
                                    <p className="link">
                                        <a href="partner@wemastertrade.com"><span>partner@wemastertrade.com</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="contact__form">
                        <div className="title">
                            <h3><span>Contact<br />WeMasterTrade</span></h3>
                            <p className="txt">Fill in the form below if you need to contact We Master Trade</p>
                        </div>
                        <div className="form">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><input name="yourname" type="text" placeholder="Your Name*" /></td>
                                        <td><input name="emailaddress" type="text" placeholder="Email Address*" /></td>
                                    </tr>
                                    <tr>
                                        <td><input type="contactnumber" placeholder="Contact Number*" /></td>
                                        <td>
                                            <select name="question" id="question">
                                                <option value="General questions">General questions</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="message" id="message" placeholder="Message" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div className="row_submit">
                                                <div className="upload__wrapper">
                                                    <label className="upload__btn">Upload file<input type="file" hidden /></label>
                                                    <span className="upload__text">No file selected (rar, zip, doc, docx, pdf, max 1MB)</span>
                                                </div>
                                                <div className="btn right">
                                                    <p><a href="#"><span>Submit</span></a></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
