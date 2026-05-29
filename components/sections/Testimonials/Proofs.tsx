"use client";

import React, { useEffect, useState } from 'react';
import { LangProps } from '../../../types/common';
import { useDailyPayout } from '../../../hooks/useDailyPayout';
import { Fancybox } from '@fancyapps/ui';

export default function Proofs({}: LangProps) {
    const {
        allData,
        loading,
        sectionRef,
    } = useDailyPayout();

    const [showAll, setShowAll] = useState(false);

    const visibleItems = showAll ? allData : allData.slice(0, 12);

    useEffect(() => {
        if (!visibleItems.length) return;

        Fancybox.bind('[data-fancybox="proofs"]', {});

        return () => {
            Fancybox.unbind('[data-fancybox="proofs"]');
            Fancybox.close();
        };
    }, [visibleItems]);

    return (
        <section ref={sectionRef} id="daily-payout-section" className="proofs">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Proofs</p>
                    <h3><span>Proof of Reward</span></h3>
                    <div className="desc">
                        <p>Payouts for Successful Our Traders. Enjoy hassle-free payouts as a reward for your<br />simulated trading. Because you shouldn’t wait for your money.</p>
                    </div>
                </div>

                <div id="itemList" className={`proofs__content ${showAll ? 'active' : ''}`}>
                    {loading && allData.length === 0 && (
                        <div style={{ display: 'flex', justifyContent: 'center', minHeight: '150px', width: '100%' }}>
                            <div className="loader"></div>
                        </div>
                    )}

                    {!loading && allData.length === 0 && (
                        <p style={{ textAlign: 'center', width: '100%' }}>No data found</p>
                    )}

                    {visibleItems.map((item, index) => (
                        <div
                            key={index}
                            className="item lightbox-item"
                            data-fancybox="proofs"
                            data-src={item.certificateUrl}
                            style={{ cursor: 'pointer' }}
                        >
                            <img
                                loading="lazy"
                                src={item.certificateUrl}
                                width="332"
                                height="332"
                                alt={item.fullName || "Proof of Reward"}
                            />
                        </div>
                    ))}
                </div>

                {!showAll && allData.length > 0 && (
                    <div className="btn center" style={{ marginTop: '30px' }}>
                        <p
                            id="btnViewMore"
                            className="btn__viewmore"
                            onClick={() => setShowAll(true)}
                            style={{ cursor: "pointer" }}
                        >
                            <span>More Payout</span>
                        </p>
                    </div>
                )}
            </div>
        </section>
    );
}

