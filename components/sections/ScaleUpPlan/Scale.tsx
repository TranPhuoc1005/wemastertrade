"use client"

import Image from 'next/image'
import React from 'react'
import { LangProps } from '../../../types/common'
import { useTabs } from '../../../hooks/useTabs'

export default function Scale({lang}: LangProps) {
    const scaleTabs = useTabs({
        defaultTab: "scale_tab1",
        group: "1"
    })
    return (
        <section className="scale">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Scale Up Plan</p>
                    <h3>What is the <span>Scale Up Plan</span></h3>
                    <p className="txt">As your balance soars, so does your potential and you’d like to trade with a higher balance than what you’ve initially<br />purchased? With the our scaling plan you can!</p>
                </div>
                <div className="scale__content">
                    <div className="tabs">
                        <p {...scaleTabs.getTabProps("scale_tab1")}>Percentage</p>
                        <p {...scaleTabs.getTabProps("scale_tab2")}>Amount</p>
                    </div>
                    <div className="tabs__content">
                        <div {...scaleTabs.getTabPanelProps("scale_tab1")}>
                            <p className="dc1"><Image loading="lazy" src="/images/tabs_table_dc1.png" width="532" height="532" alt="What is the Scale Up Plan" /></p>
                            <p className="dc2"><Image loading="lazy" src="/images/tabs_table_dc2.png" width="532" height="532" alt="What is the Scale Up Plan" /></p>
                            <div className="table__scroll">
                                <table className="center">
                                    <thead>
                                        <tr>
                                            <th>Program Level</th>
                                            <th>Initial Balance</th>
                                            <th>Profit Target</th>
                                            <th>Profit Consistency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Evaluation Trader LV1</td>
                                            <td>100%</td>
                                            <td>20%</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>150%</td>
                                            <td>10%</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>300%</td>
                                            <td>10%</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4**</td>
                                            <td>600%</td>
                                            <td>10%</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV5</td>
                                            <td>1200%</td>
                                            <td>10%</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV6</td>
                                            <td>2400%</td>
                                            <td>10%</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader MAX</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div {...scaleTabs.getTabPanelProps("scale_tab2")}>
                            <p className="dc1"><Image loading="lazy" src="/images/tabs_table_dc1.png" width="532" height="532" alt="What is the Scale Up Plan" />
                            </p>
                            <p className="dc2"><Image loading="lazy" src="/images/tabs_table_dc2.png" width="532" height="532" alt="What is the Scale Up Plan" />
                            </p>
                            <div className="table__scroll">
                                <table className="center">
                                    <thead>
                                        <tr>
                                            <th>Program Level</th>
                                            <th>Initial Balance</th>
                                            <th>Profit Target</th>
                                            <th>Profit Consistency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr className="highlight" style={{ backgroundColor: "#FACC15", color: "#fff" }}>
                                            <td colSpan={5} className="center">10K Evaluation Trader <i className="fas fa-chevron-down accordion-trigger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV 1</td>
                                            <td>$10,000</td>
                                            <td>$2,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>$15,000</td>
                                            <td>$1,500</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>$30,000</td>
                                            <td>$3,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4</td>
                                            <td>$60,000</td>
                                            <td>$6,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV5</td>
                                            <td>$120,000</td>
                                            <td>$12,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV6</td>
                                            <td>$240,000</td>
                                            <td>$24,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV7</td>
                                            <td>$480,000</td>
                                            <td>$48,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV8</td>
                                            <td>$960,000</td>
                                            <td>$96,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV9</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                        <tr className="highlight center" style={{ backgroundColor: "#FACC15", color: "#fff" }}>
                                            <td colSpan={5} className="center">25K Evaluation Trader <i className="fas fa-chevron-down accordion-trigger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV 1</td>
                                            <td>$25,000</td>
                                            <td>$5,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>$37,500</td>
                                            <td>$3,750</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>$75,000</td>
                                            <td>$7,500</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4</td>
                                            <td>$150,000</td>
                                            <td>$15,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV5</td>
                                            <td>$300,000</td>
                                            <td>$30,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV6</td>
                                            <td>$600,000</td>
                                            <td>$60,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV7</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                        <tr className="highlight center" style={{ backgroundColor: "#FACC15", color: "#fff" }}>
                                            <td colSpan={5} className="center">50K Evaluation Trader <i className="fas fa-chevron-down accordion-trigger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV 1</td>
                                            <td>$50,000</td>
                                            <td>$10,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>$75,000</td>
                                            <td>$7,500</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>$150,000</td>
                                            <td>$15,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4</td>
                                            <td>$300,000</td>
                                            <td>$30,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV5</td>
                                            <td>$600,000</td>
                                            <td>$60,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV6</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                        <tr className="highlight center" style={{ backgroundColor: "#FACC15", color: "#fff" }}>
                                            <td colSpan={5} className="center">100K Evaluation Trader <i className="fas fa-chevron-down accordion-trigger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV 1</td>
                                            <td>$100,000</td>
                                            <td>$20,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>$150,000</td>
                                            <td>$15,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>$300,000</td>
                                            <td>$30,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4</td>
                                            <td>$600,000</td>
                                            <td>$60,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV5</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                        <tr className="highlight center" style={{ backgroundColor: "#FACC15", color: "#fff" }}>
                                            <td colSpan={5} className="center">200K Evaluation Trader <i className="fas fa-chevron-down accordion-trigger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV 1</td>
                                            <td>$200,000</td>
                                            <td>$40,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV2</td>
                                            <td>$300,000</td>
                                            <td>$30,000</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV3</td>
                                            <td>$600,000</td>
                                            <td>$60,000</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Evaluation Trader LV4</td>
                                            <td>$1,000,000</td>
                                            <td>N/A</td>
                                            <td>No</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p className="scale__note center">* Traders must achieve at least 2 payouts to progress to the next step of level 2.<br />* All levels, we will send the personalized trading agreement.<br />* Currently, a scale-up plan is not applied to the 51010NoPC, but it may be applied in the future.</p>
                </div>
            </div>
        </section>
    )
}
