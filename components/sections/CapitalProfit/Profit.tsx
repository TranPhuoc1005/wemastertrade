import { LangProps } from '../../../types/common';

export default function Profit({lang}: LangProps) {
    return (
        <section id="cap-main" className="profit">
            <div className="container">
                <div className="profit__frame">
                    <div className="title center">
                        <p className="title__sub">All packages</p>
                        <h3><span>For all packages</span></h3>
                        <p className="txt">You will receive a performance-based reward of up to 90% if you meet the requirements described in the table below.</p>
                    </div>
                    <div className="profit__content">
                        <div className="boxs">
                            <div className="item">
                                <p className="txt1">1st Payout</p>
                                <p className="percent">50%</p>
                                <p className="txt2">performance-based reward</p>
                            </div>
                            <div className="item">
                                <p className="txt1">2nd Payout</p>
                                <p className="percent">75%</p>
                                <p className="txt2">performance-based reward</p>
                            </div>
                            <div className="item">
                                <p className="txt1">From 3rd Payout</p>
                                <p className="percent">90%</p>
                                <p className="txt2">performance-based reward</p>
                            </div>
                        </div>
                        <div className="note">
                            <p>Please note that for the <strong>510Zero</strong> packages:</p>
                            <ul>
                                <li>If the performance level is less than 6%, the performance-based reward of the 510Zero package will be reduced to a fixed 10%, except for clients from Vietnam, Indonesia and Thailand.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
